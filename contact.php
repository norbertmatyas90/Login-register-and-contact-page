<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

require_once './contactForm.php';
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

</head>

<body>

    <?php if(isset($_SESSION['felhasznalo']['id'])){ ?>

    <!--header-->
    <header>
        <div class="header-wrapper">
            <nav>
                <a href="./index.php">Home</a>
                <a href="./iss.php">ISS</a>
                <a href="./hubble.php">Huble</a>
                <a href="./stratosphere.php">Stratosphere</a>
                <a href="#">Connection</a>

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

   <div class="comtact_form">
            <form action="./upload.php" method="POST" enctype="multipart/form-data">
            <?php print($row['firstname']); ?>
                <label for="c_fname">First name</label>
                    <input type="text" name="c_fname" value="<?php print($row['firstname']); ?>">
             
                <label for="c_lname">Last name</label>
                    <input type="text" name="c_lname"
                    value="<?php print($row['lastname']); ?>">
                
                <label for="c_email">Email </label>
                    <input type="email" name="c_email"
                    value="<?php print($row['email']); ?>">
               
                <label for="c_textarea">Your Answear</label>
                    <textarea name="c_textarea" id="" rows="6"></textarea>
                
                <label for="topic">Select topic </label>
                    <select name="topic" id="">
                        <option value="ISS">ISS</option>
                        <option value="Huble">Huble</option>
                        <option value="Stratosphere">Stratosphere</option>
                    </select>
               
                 <label for="kep">Upload your photo</label>
                    <input type="file" name="kep">
               
                <button type="submit" name="send">Send</button>
            </form>
            
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
