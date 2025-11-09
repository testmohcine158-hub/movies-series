<?php
session_start();
require __DIR__ . '/bd.php';

$pdo = connect();
$error = '';
$success = '';

//formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    //si un des champs est vide on renvoie une erreur
    if ($username === '' || $email === '' || $password === '') {
        $error = "Tous les champs sont obligatoires.";
    } 
    // sinon si le mail saisi par l'utilisateur est invalide, on renvoie une erreur
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide.";
    } 
    else {
        // On vérifie si le mail existe déjà
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        // s'il existe on renvoie une erreur
        if ($stmt->fetch()) {
            $error = "Un compte avec cet email existe déjà.";
        } else {
            // On hashe le mot de passe et on l'insère dans notre base de données
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $hash]);
            $success = "Compte créé avec succès ! Vous pouvez maintenant vous connecter.";
        }
    }
}
?>

<!-- Code html -->
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Créer un compte</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="register-page">

  <main class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="w-100" style="max-width:460px;">
      <h3 class="text-center mb-4">Créer un compte</h3>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
      <?php elseif (!empty($success)): ?>
        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
      <?php endif; ?>

      <!-- Formulaire -->
      <div class="card register-card p-4 rounded-4">
        <form method="post" autocomplete="off">
          <!-- Nom d'utilisateur -->
          <div class="mb-3">
            <label class="form-label text-secondary">Nom d'utilisateur</label>
            <input type="text" name="username" class="form-control register-input" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label class="form-label text-secondary">Email</label>
            <input type="email" name="email" class="form-control register-input" required>
          </div>

          <!-- Mot de passe -->
          <div class="mb-3">
            <label class="form-label text-secondary">Mot de passe</label>
            <input type="password" name="password" class="form-control register-input" required>
          </div>

          <button class="btn register-btn w-100 mb-3">S'inscrire</button>

          <div class="d-flex justify-content-between small">
            <a href="connexion.php">Déjà un compte ?</a>
            <a href="forget.php">Mot de passe oublié ?</a>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
