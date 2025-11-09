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
    <title>Trailer</title>
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
    <header>
        <h1>Movies & Series</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a class="active" href="trailer.php">Trailer</a>
            <a href="movies.php">Movies</a>
            <a href="series.php">Series</a>
            <a href="logout.php">Déconnexion</a>
        </nav>

        <div class="search-box">
            <img src="images/search.jpg" alt="search-icon" />
            <input type="text" placeholder="Search..." />
        </div>
    </header>

    <!-- Home -->

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
                    <h4>Two ancient giants, Godzilla and Kong, clash in an epic battle as humans uncover their tangled
                        origins and connection to the mysteries of Skull Island.</h4>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>
                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback.mp4"
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
                        <p>Episode 18</p>
                        <p>Action</p>
                    </div>
                    <h4>The events take place 300 years before the events of the original series, focusing on the
                        details of the Targaryen family and significant glimpses into the history of the family that
                        ruled Westeros long ago, leading up to the Dance of the Dragons and the internal conflicts
                        within the family that destroyed everything and threatened the extinction of dragons forever.
                    </h4>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback 1.mp4"
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
                        <p>Episode 73</p>
                        <p>Fantasy</p>
                    </div>
                    <h4>Game of Thrones revolves around the struggle for the Iron Throne in Westeros among warring noble
                        families. At the same time, supernatural forces from the north threaten the kingdom, forcing
                        everyone to confront a greater danger.</h4>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback 2.mp4"
                            type="video/mp4"></video>
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
                    <h4>During his journey of physical and spiritual healing, a brilliant neurosurgeon is drawn
                        into the
                        world of mysterious arts.</h4>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback 3.mp4"
                            type="video/mp4"></video>
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
                    <h4>Cole falls in love with Sadie, but she suddenly disappears. He follows her to discover that
                        she
                        is a secret agent, dragging him into international chases. Together, they face a criminal
                        organization that wants to sell a biological weapon and succeed in thwarting its plan.</h4>
                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback 4.mp4"
                            type="video/mp4"></video>
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
                    <h4>Tony Stark faces a new enemy after the shocks of The Avengers and discovers a conspiracy of
                        the
                        Extremis project led by Killian. In the end, he defeats him and realizes that true power is
                        not
                        in the armor but in himself.</h4>
                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback 5.mp4"
                            type="video/mp4"></video>
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
                    <h4>In a science fiction context, Superman embarks on a journey to reconcile his super identity
                        with
                        his human nature, as he strives to embody truth and spread justice through his heroic
                        actions.
                    </h4>
                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback 6.mp4"
                            type="video/mp4"></video>
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
                    <h4>When a pilot crashes and talks about the conflict in the outside world, Diana, an Amazon
                        warrior
                        in training, leaves her home to fight a war and discovers her full power and true destiny.
                    </h4>

                    <div class=”buttons”>
                        <button class="download-btn">Download</button>
                        <button class="trailer-btn">Trailer</button>
                        <button onclick="playVid()" type="button">Play Video</button>
                        <button onclick="pauseVid()" type="button">Pause Video</button>
                    </div>

                    <div class="vid-box">
                        <video controls id="vid" class="vid-trailer" src="assents/videoplayback 7.mp4"
                            type="video/mp4"></video>
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
