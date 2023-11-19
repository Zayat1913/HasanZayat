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
    <title>CV Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />

    <style>
        .welcome-logout {
            position: absolute;
            top: 11px;
            right: 10px;
            text-align: right;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div id="header">
        <div id="dropdown-menu">
            <span style="margin-left: 5px;">
                My Pages
            </span>
            <div class="dropdown-content">
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
        <!-- Add Welcome Message and Logout Button -->
        <span class="welcome-logout">
            Welcome
            <?php echo $_SESSION["email"]; ?>
        </span>
    </div>
    <div id="resume">
        <div class="header">
            <img src="pr.jpg" alt="programming image" />
            <h1>Hasan Zayat</h1>
        </div>

        <div class="section experience">
            <h2><i class="fas fa-briefcase"></i> Experience</h2>
            <ul>
                <li>Website for the company during the internship</li>
                <li>Database Management project with colleagues in University</li>
                <li>Labs' projects and assignments for different courses</li>
            </ul>
        </div>
        <div class="section education">
            <h2><i class="fas fa-graduation-cap"></i> Education</h2>
            <ul>
                <li style="font: 90">
                    Lebanese American University, Beirut, Lebanon – Bachelor of Science
                    in Computer Science
                </li>
                <div style="margin-top: -10px">
                    <li style="font-size: small; list-style-type: none">
                        Sep 2021 - present
                    </li>
                </div>
                <li>Expected Graduation: Dec 2024</li>
                <li>
                    Main courses: Introduction to OOP, Object and Data Abstraction,
                    Algorithms and Data Structures, Operating Systems, Computer
                    Organization, Calculus, Discrete Structures
                </li>
            </ul>
        </div>
        <div class="section skills">
            <h2><i class="fas fa-code"></i> Skills</h2>
            <ul>
                <li style="font-size: medium">
                    Technical Skills: HTML, CSS, Java, PHP, Python, SQL, C, Microsoft
                    Skills, ChatGPT
                </li>
                <li style="font-size: medium">
                    Soft Skills: Hard worker, detail-oriented, curious
                </li>
            </ul>
        </div>
        <div class="section projects">
            <h2><i class="fas fa-tasks"></i> Projects</h2>
            <ul>
                <li>Database Management project</li>
                <li>Computer Organization project with MIPS</li>
                <li>Website using PHP</li>
            </ul>
        </div>
        <div class="section contact">
            <h2><i class="fas fa-envelope"></i> Contact</h2>
            <ul>
                <li>Email: hasan.zayat20@gmail.com</li>
                <li>Phone: (+961) 71339718</li>
                <li>
                    LinkedIn:
                    <a
                        href="https://www.linkedin.com/in/hasan-zayat-9b89a1244">https://www.linkedin.com/in/hasan-zayat</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>