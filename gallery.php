<?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Image Gallery</title>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Dela+Gothic+One&family=Gabarito:wght@700;900&family=Gloock&family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            /* justify-content: center;
            align-items: center; */
            min-height: 100vh;
        }
        .header {
            color: #fff;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            font-family: 'Dela Gothic One', cursive;
            font-weight: 400;
        }

        li {
            display: inline-block;
            font-family: 'Dela Gothic One', cursive;
            font-weight: 400;
            position: relative;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        li:hover .dropdown-content {
            display: block;
        }

        .dropdown-item {
            padding: 10px;
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .dropdown-item:hover {
            background-color: #444;
        }
        .dropdown-item.active {
            background-color: #FF5733; 
            color: #FFFFFF; 
}
        .gallery-container {
            display: flex;
            align-items: center;
            padding: 20px;
        }
        .gallery-title {
            font-family: 'Dela Gothic One', cursive;
            font-weight: 400;
            color: black;
            font-size: 24px;
            margin-right: 20px;
            text-align: center;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .gallery-item:hover {
            transform: scale(1.1);
            z-index: 1;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: center;
    
            }
            .gallery-container {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px 20px 0;
            }
            .gallery-title {
                margin-right: 0;
                margin-bottom: 20px;
                text-align: center;
                order: -1;
        }
    }
    .menu-icon img {
            height: 20px; 
            margin-right: 5px; 
        }
        .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            font-size: 16px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .gallery-item:hover .caption {
            opacity: 1;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .modal-image {
            max-width: 90%;
            max-height: 90%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .modal:target {
            display: block;
        }
    </style>
</head>
<body>
    <ul>
        <li>
            MENU
            <div class="dropdown-content">
                <a class="dropdown-item active" href="gallery.php">Gallery</a>
                <a class="dropdown-item" href="cv.php">CV</a>
                <a class="dropdown-item" href="home.php">HOME</a>
                <a class="dropdown-item" href="contact.php">CONTACT US</a>
            </div>
        </li>
    </ul>
    <div class="header">
        
    </div>
    <div class="gallery-container">
        <h1 class="gallery-title">My Styled Image Gallery</h1>
    <div class="gallery">
        <a href="#modal1">
        <div class="gallery-item">
            <img src="McLaren_P1.jpg" alt="Mclaren P1">
            <div class="caption">Mclaren P1</div>
        </div>
        </a>
        <a href="#modal2">
        <div class="gallery-item">
            <img src="Lambosvj.jpg" alt="Lamborghini SVJ">
            <div class="caption">Lamborghini SVJ</div>
        </div>
        </a>
        <a href="#modal3">
        <div class="gallery-item">
            <img src="B1.jpg" alt="Bugatti Chiron Super Sport">
            <div class="caption">Bugatti Chiron Super Sport</div>
        </div>
        </a>
        <a href="#modal4">
        <div class="gallery-item">
            <img src="pista.jpg" alt="Ferrari 488 Pista">
            <div class="caption">Ferrari 488 Pista</div>
        </div>
        </a>
        <a href="#modal5">
        <div class="gallery-item">
            <img src="m4.jpg" alt="BMW M4 Competition">
            <div class="caption">BMW M4 Competition</div>
        </div>
        </a>
        <a href="#modal6">
        <div class="gallery-item">
            <img src="bbg.jpg" alt="Mercedes Brabus C63 AMG">
            <div class="caption">Mercedes Brabus C63 AMG</div>
        </div>
        </a>
    </div>
    </div>
    <div id="modal1" class="modal">
        <span class="close-button" onclick="location.href='#'">&times;</span>
        <div class="modal-content">
            <img class="modal-image" src="McLaren_P1.jpg" alt="Mclaren P1">
        </div>
    </div>
    <div id="modal2" class="modal">
        <span class="close-button" onclick="location.href='#'">&times;</span>
        <div class="modal-content">
            <img class="modal-image" src="Lambosvj.jpg" alt="Lamborghini SVJ">
        </div>
    </div>
    <div id="modal3" class="modal">
        <span class="close-button" onclick="location.href='#'">&times;</span>
        <div class="modal-content">
            <img class="modal-image" src="B1.jpg" alt="Bugatti Chiron Super Sport">
        </div>
    </div>
    <div id="modal4" class="modal">
        <span class="close-button" onclick="location.href='#'">&times;</span>
        <div class="modal-content">
            <img class="modal-image" src="pista.jpg" alt="Ferrari 488 Pista">
        </div>
    </div>
    <div id="modal5" class="modal">
        <span class="close-button" onclick="location.href='#'">&times;</span>
        <div class="modal-content">
            <img class="modal-image" src="m4.jpg" alt="BMW M4 Competition">
        </div>
    </div>
    <div id="modal6" class="modal">
        <span class="close-button" onclick="location.href='#'">&times;</span>
        <div class="modal-content">
            <img class="modal-image" src="bbg.jpg" alt="Mercedes Brabus C63 AMG">
        </div>
    </div>
    
</body>
</html>
