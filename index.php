<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

    <?php if(isset($_SESSION['felhasznalo']['id'])){ ?>

    <!--header-->
    <header>
        <div class="header-wrapper">
            <nav>
                <a href="#">Home</a>
                <a href="./iss.php">ISS</a>
                <a href="./hubble.php">Huble</a>
                <a href="./stratosphere.php">Stratosphere</a>
                <a href="./contact.php">Connection</a>

            </nav>
            <div class="logout">
                <p>Welcome <?php print($_SESSION['felhasznalo']['username']); ?></p>
                <a class="submit" href="./logout.php">Logout</a>
            </div>
            <img src="assets/img/header_img3.png" alt="earth">
        </div>


    </header>
    <!--end of header-->

    <!--main-->
    <main>
        <div class="black"></div>

        <div class="parallax_1">
            <div class="cards">
                <div class="card_box">
                    <div class="card">
                        <img src="./assets/img/ISS.jpg" alt="International Space Station">
                    </div>
                    <div class="text">The International Space Station is a large spacecraft in orbit around Earth. It serves as a home where crews of astronauts and cosmonauts live. The space station is also a unique science laboratory. Several nations worked together to build and use the space station.</div>
                </div>
            </div>
        </div>

        <div class="card_box">
            <div class="text">The Hubble Space Telescope explores the universe from Earth orbit. This vantage point allows it to obtain a view of cosmic objects unobstructed by Earth's atmosphere, which can distort light and block certain wavelengths.</div>
            <div class="card">
                <img src="./assets/img/hubble.jpg" alt="Hubble">
            </div>

        </div>

        <div class="parallax_2">
            <div class="cards">
                <div class="card_box">
                    <div class="card">
                        <img src="./assets/img/startosphare.jpg" alt="The Statosphare">
                    </div>
                    <div class="text">The stratosphere is a layer of Earth's atmosphere. It is the second layer of the atmosphere as you go upward. ... The bottom of the stratosphere is around 10 km (6.2 miles or about 33,000 feet) above the ground at middle latitudes. The top of the stratosphere occurs at an altitude of 50 km (31 miles).</div>
                </div>
            </div>
        </div>

        <div class="card_box">
            <div class="text">n astronaut (from the Greek "astron" (ἄστρον), meaning "star", and "nautes" (ναύτης), meaning "sailor") is a person trained, equipped, and deployed by a human spaceflight program to serve as a commander or crew member aboard a spacecraft.</div>
            <div class="card">
                <img src="./assets/img/connection.jpg" alt="The astronauts">
            </div>

        </div>
    </main>
    <!--end of main-->

    <!--footer-->
    <footer>

        <div class="footer-wrapper">
            <div class="footer-box">
                <ul>
                    <li>
                        <h3>Lorem ipsum.</h3>
                    </li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
            <div class="footer-box">
                <ul>
                    <li>
                        <h3>Lorem ipsum.</h3>
                    </li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
            <div class="footer-box">
                <ul>
                    <li>
                        <h3>Lorem ipsum.</h3>
                    </li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                    <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--end of footer-->

    <?php
    }else{
        print('a megtekintéshez jelentkezzen be!');
    }
    ?>
</body></html>
