<?php
session_start();
require __DIR__ . '/bd.php';
require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pdo = connect(); 

$error = '';
$success = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Veuillez entrer une adresse e-mail valide.";
    } else {
        // Vérification si l'email existe dans la base
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Génération d’un token + expiration
            $token = bin2hex(random_bytes(32));
            $exp   = date("Y-m-d H:i:s", strtotime("+1 hour"));

            // Enregistrer le token en base 
            $update = $pdo->prepare("UPDATE users SET reset_token = ?, reset_expires = ? WHERE email = ?");
            $update->execute([$token, $exp, $email]);

            // lien (garde un seul nom de fichier partout)
            $resetLink = "http://localhost/mohcine/resetPassword.php?token=" . $token;

            // ENVOI DU MAIL AVEC PHPMailer
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'sandbox.smtp.mailtrap.io'; 
                $mail->SMTPAuth   = true;
                $mail->Username   = 'e7cf8d05818705';   
                $mail->Password   = '1e621f1afe8603';   
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 2525;
                $mail->SMTPAutoTLS = true;

                $mail->CharSet  = 'UTF-8';              // encodage du message
                $mail->Encoding = 'base64';             
                $mail->isHTML(true);                    // on envoie une version HTML

                $mail->setFrom('no-reply@movies-series.test', 'Movies & Series');
                $mail->addAddress($email); // envoyé à l’email saisi

                $mail->isHTML(true);
                $mail->Subject = 'Réinitialisation de ton mot de passe';  // accents OK
                $mail->Body    = "
                     <p>Bonjour !</p>
                     <p>Nous avons reçu une demande de réinitialisation de ton mot de passe.</p>
                     <p>Clique sur le lien ci-dessous pour en choisir un nouveau :</p>
                     <p><a href='{$resetLink}' target='_blank'>{$resetLink}</a></p>
                     <p>Ce lien expirera dans 1 heure.</p>
                     <br><p>– L’équipe Movies & Series 🎬</p>
                     ";
                     $mail->AltBody = "Bonjour !
                     Nous avons reçu une demande de réinitialisation de ton mot de passe.
                     Clique sur ce lien pour en choisir un nouveau :
                     {$resetLink}
                     Ce lien expirera dans 1 heure.
                     – L’équipe Movies & Series 🎬";


                $mail->send();
                $success = "✅ Si un compte existe avec cette adresse, un lien de réinitialisation a été envoyé.";
            } catch (Exception $e) {
                $error = "Erreur lors de l'envoi de l'e-mail : " . $mail->ErrorInfo;
            }
        } else {
            // Par sécurité, même message même si l'email n'existe pas
            $success = "✅ Si un compte existe avec cette adresse, un lien de réinitialisation a été envoyé.";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mot de passe oublié</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="fontawesome-free-7.1.0-web/css/all.min.css">
</head>

<body class="forget-page">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-sm text-light p-4 rounded-4 forget-card">
          <h3 class="text-center mb-4"><i class="fa-solid fa-lock"></i> Mot de passe oublié</h3>

          <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
          <?php elseif ($success): ?>
            <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
          <?php endif; ?>

          <form method="post" action="forget.php">
            <div class="mb-3">
              <label class="form-label text-light">Adresse e-mail</label>
              <input type="email" name="email" class="form-control forget-input" placeholder="Entrez votre e-mail" required>
            </div>

            <button type="submit" class="btn btn-danger w-100 forget-btn">
              <i class="fa-solid fa-paper-plane"></i> Envoyer le lien
            </button>
          </form>

          <div class="text-center mt-4">
            <a href="connexion.php" class="forget-link">
              <i class="fa-solid fa-arrow-left"></i> Retour à la connexion
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
