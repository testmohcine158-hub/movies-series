<?php
session_start();

if (empty($_SESSION['user_id'])) {
    // L’utilisateur n’est pas connecté → on le renvoie à la page de connexion
    header('Location: connexion.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Series</title>
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
    <header>
        <h1>Movies & Series</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="trailer.php">Trailer</a>
            <a href="movies.php">Movies</a>
            <a class="active" href="series.php">Series</a>
            <a href="logout.php">Déconnexion</a>
        </nav>

        <div class="search-box">
            <img src="images/search.jpg" alt="search-icon" />
            <input type="text" placeholder="Search..." />
        </div>
    </header>

    <!-- series -->

    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 1</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 1</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 2</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (1).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 2</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 3</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (2).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 3</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 4</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (3).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 4</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 5</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (4).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 5</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 6</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (5).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 6</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 7</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (6).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 7</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 8</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (7).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 8</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 9</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (8).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 9</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/House of the Dragon.jpeg" alt="" />
                <div class="content">
                    <h1>House of the Dragon</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2022 & 2024</p>
                        <p>Episode 10</p>
                        <p>Action</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="series/the_Dragon (9).mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/movie/DRAGOON.jpg" alt="" />
                <div class="content">
                    <h1>Game of thrones</h1>
                    <div class="details">
                        <p>TV Series</p>
                        <p>2011 & 2019</p>
                        <p>Episode 10</p>
                        <p>Fantasy</p>
                    </div>


                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Watch</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="video" src="series/Game.of.Thrones1.mp4"
                            type="video/mp4"></video>
                    </div>
                </div>
            </div>

        </div>

        <!-- list thumnail -->
        <div class="thumbnail">

            <div class="item">
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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
                <img src="images/movie/Dragon.jpg" alt="" />
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
                <img src="images/movie/Game of thrones.jpg" alt="" />
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