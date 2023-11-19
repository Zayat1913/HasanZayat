<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ContactMe</title>
    <link rel="stylesheet" href="Cstyle.css" />
    <style>
    .welcome-logout {
        position: absolute;
        top: 9px;
        right: 10px;
        text-align: right;
        font-family: sans-serif;
    }
    </style>
</head>

<body>
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span style="margin-left: 5px;">
                My Pages
            </span>
            <div class=" dropdown-content">
                <ul>
                    <li>
                        <a href="cv.php">CV</a>
                    </li>
                    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <span class="welcome-logout">
            Welcome
            <?php echo $_SESSION["email"]; ?>
        </span>
    </div>
    <div class="contact">
        <p>MessageMe:</p>
        <p class="contacttools">
            Email:
            <a href="mailto:hasan.zayat20@gmail.com">hasan.zayat20@gmail.com</a>
        </p>
        <p class="contacttools">
            tel: <a href="tel:+96171339718">+96171339718</a>
        </p>
        <p class="contacttools">
            LinkedIn: <a
                href="https://www.linkedin.com/in/hasan-zayat-9b89a1244">https://www.linkedin.com/in/hasan-zayat</a>
        </p>
    </div>
</body>

</html>