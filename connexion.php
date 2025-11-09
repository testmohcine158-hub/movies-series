<?php

//connexion à la base de données
session_start();
require __DIR__ . '/bd.php';

$pdo = connect();
$error = '';

//formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    //si le email saisi par l'utilisateur est invalide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide.";
    } 
    // sinon si l'utlisateur n'a pas saisi de mot de passe
    elseif ($password === '') {
        $error = "Mot de passe requis.";
    } 
    // sinon on cherche dans la base de données sur les données de l'utilisateur avec le mail saisi dans le formulaire
    else {
        $stmt = $pdo->prepare("SELECT id, password_hash FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // si l'utilisateur n'existe pas (le mail incorrect) ou si le mot de passe est incorrect
        if (!$user || !password_verify($password, $user['password_hash'])) {
            $error = "Email ou mot de passe incorrect.";
        } 
        // sinon la connexion est réussie
        else {
            $_SESSION['user_id'] = $user['id'];
            header('Location: index.php');
            exit;
        }
    }
}

// si l'utilisateur est déjà connecté, on le redirige vers la page home
if (!empty($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

?>

<!-- Code html -->
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="login-page"> 
  <main class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="w-100" style="max-width:420px;">
      <h3 class="text-center mb-4">Connexion</h3>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      
      <div class="card p-4 rounded-4 login-card">
        <form method="post" autocomplete="off">
          
          <!-- Email -->
          <div class="mb-3">
            <label class="form-label text-secondary">Email</label>
            <input type="email" name="email" class="form-control login-input" required>
          </div>

          <!-- Mot de passe -->
          <div class="mb-3">
            <label class="form-label text-secondary">Mot de passe</label>
            <input type="password" name="password" class="form-control login-input" required>
          </div>

          
          <button class="btn login-btn w-100 mb-3">Se connecter</button>

          <div class="d-flex justify-content-between small">
            <a href="forget.php">Mot de passe oublié ?</a>
            <a href="register.php">Créer un compte</a>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
