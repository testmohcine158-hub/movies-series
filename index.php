<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movies & Series</title>

  <link rel="stylesheet" href="css/main.css?v=4">
  <link rel="stylesheet" href="fontawesome-free-7.1.0-web/css/all.min.css">
</head>

<body>
  <!-- Arrière-plan -->
  <div class="background"></div>

  <!-- En-tête -->
  <header>
    <h1><i class="fa-solid fa-film"></i> Movies & Series</h1>

    <nav>
      <a href="index.php" class="active">Accueil</a>
      
      <!-- Les liens vers trailer/movies/series/logout s’affichent uniquement si la connexion est réussie -->
      <?php if (!empty($_SESSION['user_id'])): ?>
        <a href="trailer.php">Trailer</a>
        <a href="movies.php">Movies</a>
        <a href="series.php">Series</a>
        <a href="logout.php">Déconnexion</a>
      <?php else: ?>
        <a href="connexion.php">S’identifier</a>
      <?php endif; ?>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-inner">
      <h2>Films et séries, et bien plus</h2>

      <?php if (empty($_SESSION['user_id'])): ?>
        <!-- Formulaire de création de compte visible seulement si l'utilisateur n'est PAS connecté -->
        <p class="hint">Prêt à regarder&nbsp;? Saisis ton adresse e-mail pour créer ton compte.</p>

        <form class="hero-form" action="register.php" method="get">
          <input type="email" name="email" placeholder="Adresse e-mail" required>
          <button type="submit">Commencer</button>
        </form>
      <?php else: ?>
        <!-- Message visible seulement si l'utilisateur est connecté -->
        <p class="hint" style="font-size: 1.3rem; margin-top: 15px;"> Profitez de vos films et séries !</p>
      <?php endif; ?>
    </div>
  </section>

</body>
</html>
