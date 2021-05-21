<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

require_once './hubbleInfo.php';
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/hubble.css">
</head>

<body>

    <?php if(isset($_SESSION['felhasznalo']['id'])){ ?>

    <!--header-->
    <header>
        <div class="header-wrapper">
            <nav>
                <a href="./index.php">Home</a>
                <a href="./iss.php">ISS</a>
                <a href="#">Huble</a>
                <a href="./stratosphere.php">Stratosphere</a>
                <a href="./contact.php">Connection</a>

            </nav>
            <div class="logout">
                <p>Welcome <?php print($_SESSION['felhasznalo']['username']); ?></p>
                <a class="submit" href="./logout.php">Logout</a>
            </div>
        </div>

    </header>
    <!--end of header-->

    <!--main-->
    <main>
    
    <?php
        if(isset($rows))
       {
           foreach($rows as $key => $row)
          { 
    ?>

   <div class="hubble_cards">
        <div class="card">
            <img src="./assets/img/<?php print($row[1]);?>.jpg" alt="Iss station">
            <p> <?php print($row[2]); ?></p>
        </div>
   </div>

   <?php
      }
   }
    ?>

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
