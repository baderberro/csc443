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
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Dela+Gothic+One&family=Gabarito:wght@700;900&family=Gloock&family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            /* background-image: url('your-background-image.jpg'); */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Dela Gothic One', cursive;
            font-weight: 400;
            margin: 0;
            padding: 0;
}
        .welcome-container {
            text-align: center;
             margin-top: 20vh; 
}

        .welcome-text {
            font-size: 2rem;
            color: black;
            text-transform: uppercase;
}
        .small-text {
            margin-top: 0.5rem;
            font-size: 1rem;
            /* color: #ccc; */
            color: #FF5733;
            text-transform: uppercase;
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
    </style>
</head>
<body>
    <ul>
        <li>
            MENU
            <div class="dropdown-content">
                <a class="dropdown-item active" href="index.php">HOME</a>
                <a class="dropdown-item" href="cv.php">CV</a>
                <a class="dropdown-item" href="gallery.php">GALLERY</a>
                <a class="dropdown-item" href="contact.php">CONTAC US</a>
            </div>
        </li>
    </ul>
    <div class="welcome-container">
        <div class="welcome-text">
            Welcome to my home page
        </div>
        <div class="small-text">
            Get started by surfing the menu
        </div>
    </div>
</body>
</html>
