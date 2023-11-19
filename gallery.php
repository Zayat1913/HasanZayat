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
    <title>Gallery</title>
    <link rel="stylesheet" href="Gstyle.css" />
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

<body style="background-color:black">
    <div id="header">
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
    <div class="gallery" id="dynamicGallery">
        <!-- Images will be loaded here dynamically -->
    </div>

    <script>
        // Fetch images from JSON file dynamically
        fetch('gallery.json')
            .then(response => response.json())
            .then(data => {
                const galleryContainer = document.getElementById('dynamicGallery');

                data.images.forEach((imageName, index) => {
                    const thumbnailDiv = document.createElement('div');
                    thumbnailDiv.className = 'thumbnail';
                    thumbnailDiv.innerHTML = `
                        <a href="#image${index + 1}">
                            <img src="${imageName}" />
                        </a>
                    `;
                    galleryContainer.appendChild(thumbnailDiv);

                    const lightboxDiv = document.createElement('div');
                    lightboxDiv.id = `image${index + 1}`;
                    lightboxDiv.className = 'lightbox';
                    lightboxDiv.innerHTML = `
                        <a href="#close" class="close-btn">×</a>
                        <img src="${imageName}" />
                    `;
                    galleryContainer.appendChild(lightboxDiv);
                });
            });
    </script>
</body>

</html>