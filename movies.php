<?php
session_start();

if (empty($_SESSION['user_id'])) {
    // L’utilisateur n’est pas connecté → on le renvoie à la page de connexion
    header('Location: connexion.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movies</title>
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
    <header>
        <h1>Movies & Series</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="trailer.php">Trailer</a>
            <a class="active" href="movies.php">Movies</a>
            <a href="series.php">Series</a>
            <a href="logout.php">Déconnexion</a>
        </nav>

        <div class="search-box">
            <img src="images/search.jpg" alt="search-icon" />
            <input type="text" placeholder="Search..." />
        </div>
    </header>

    <!-- Movies -->

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">

            <div class="item">
                <img src="images/movie/GodzillaxKong.jpg" alt="" />
                <div class="content">
                    <h1>Godzilla x kong</h1>
                    <div class="details">
                        <p>2024</p>
                        <p>1h 55min</p>
                        <p>Adventures</p>
                    </div>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="Films/Godzilla.mp4" type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/doctor-strange1.jpeg" alt="" />
                <div class="content">
                    <h1>doctor strange</h1>
                    <div class="details">
                        <p>2016</p>
                        <p>1h 55min</p>
                        <p>Fantasy</p>
                    </div>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="Films/Doctor.Strange.mp4" type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/Ghosted1.jpg" alt="" />
                <div class="content">
                    <h1>Ghosted</h1>
                    <div class="details">
                        <p>2023</p>
                        <p>1h 57min</p>
                        <p>Comedic</p>
                    </div>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="Films/Ghosted.mp4" type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/iron-man3.jpg" alt="" />
                <div class="content">
                    <h1>Iron Man3</h1>
                    <div class="details">
                        <p>2013</p>
                        <p>2h 11min</p>
                        <p>Science fiction</p>
                    </div>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="Films/Iron.Man.3.mp4" type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/SUPERMAN.webp" alt="" />
                <div class="content">
                    <h1>Superman</h1>
                    <div class="details">
                        <p>2025</p>
                        <p>2h 10min</p>
                        <p>Fantasy</p>
                    </div>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="Films/Superman.mp4" type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/wonder-woman1.jpg" alt="" />
                <div class="content">
                    <h1>Wonder Woman</h1>
                    <div class="details">
                        <p>2017</p>
                        <p>2h 21min</p>
                        <p>Adventures</p>
                    </div>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="Films/Wonder Woman.mp4" type="video/mp4"></video>
                    </div>
                </div>
            </div>
        </div>

        <!-- list thumnail -->
        <div class="thumbnail">

            <div class="item">
                <img src="images/movie/Godzilla.jpg" alt="" />
                <div class="thum-content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/doctor-strange.jpg" alt="" />
                <div class="thum-content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/Ghosted.jpg" alt="" />
                <div class="thum-content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/iron-man3.jpg" alt="" />
                <div class="thum-content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/SUPERMAN.jpg" alt="" />
                <div class="thum-content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/wonder-woman.jpg" alt="" />
                <div class="thum-content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>

        </div>

        <!-- next prev -->
        <div class="arrows">
            <button id="prev">&larr;</button>
            <button id="next">&rarr;</button>
        </div>

        <!-- time running -->
        <div class="time"></div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>