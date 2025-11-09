<?php
// resetpassword.php
session_start();
require __DIR__ . '/bd.php';

$pdo   = connect();
$error = '';
$ok    = '';

// Récupérer le token depuis GET (clic mail) OU POST (après submit)
$token = trim($_GET['token'] ?? $_POST['token'] ?? '');

if ($token === '') {
    $error = "Lien invalide.";
} else {
    // Vérifier que le token existe et n'est pas expiré
    $stmt = $pdo->prepare("SELECT id FROM users WHERE reset_token = ? AND reset_expires > NOW()");
    $stmt->execute([$token]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $error = "Lien invalide ou expiré.";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Valider et enregistrer le nouveau mot de passe
        $password  = $_POST['password']  ?? '';
        $password2 = $_POST['password2'] ?? '';

        if ($password === '' || $password2 === '') {
            $error = "Veuillez saisir et confirmer votre nouveau mot de passe.";
        } elseif ($password !== $password2) {
            $error = "Les deux mots de passe ne correspondent pas.";
        } elseif (strlen($password) < 8) {
            $error = "Le mot de passe doit contenir au moins 8 caractères.";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $up = $pdo->prepare("
                UPDATE users 
                SET password_hash = ?, reset_token = NULL, reset_expires = NULL
                WHERE id = ?
            ");
            $up->execute([$hash, $user['id']]);
            $ok = "Votre mot de passe a été réinitialisé. Vous pouvez maintenant vous connecter.";
        }
    }
}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Nouveau mot de passe</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- Bootstrap (pour .alert, .card, etc.) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Ton CSS -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="fontawesome-free-7.1.0-web/css/all.min.css">
</head>
<body class="login-page">
  <main class="container min-vh-100 d-flex align-items-center justify-content-center" style="padding:24px;">
    <div class="w-100" style="max-width:420px;">
      <h3 class="text-center mb-4 text-light">Nouveau mot de passe</h3>

      <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <div class="text-center">
          <a class="btn btn-outline-light mt-2" href="forget.php">Redemander un lien</a>
        </div>
      <?php elseif ($ok): ?>
        <div class="alert alert-success"><?= htmlspecialchars($ok) ?></div>
        <div class="text-center">
          <a class="btn btn-danger mt-2" href="connexion.php">Se connecter</a>
        </div>
      <?php endif; ?>

      <?php if (!$error && !$ok): ?>
      <div class="card p-4 rounded-4 login-card">
        <form method="post" autocomplete="off">
          <!-- garder le token au POST -->
          <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
          <div class="mb-3">
            <label class="form-label text-light">Nouveau mot de passe</label>
            <input type="password" name="password" class="form-control login-input" required minlength="8" placeholder="••••••••">
          </div>
          <div class="mb-3">
            <label class="form-label text-light">Confirmer le mot de passe</label>
            <input type="password" name="password2" class="form-control login-input" required minlength="8" placeholder="••••••••">
          </div>
          <button class="btn login-btn w-100">Valider</button>
        </form>
      </div>
      <?php endif; ?>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
