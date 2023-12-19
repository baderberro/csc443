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
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/images/terminal.svg/" type="image/svg">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
            ul {
            font-size: 1.5rem;    
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
        body {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contact-container {
            text-align: center;
        }

        .contact-title {
            font-size: 3rem;
            color: #333;
            font-family: 'Dela Gothic One', cursive;
            font-weight: 400;
            text-transform: uppercase;
        }

        .contact-info {
            margin-top: 1rem;
            font-size: 2rem;
            font-weight: 600;
            color: var(--text-color);
        }
        .items{
            margin-top: 1.6rem;
        }
        .strong{
            color: #FF5733;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <ul class="dropdown">
        <li>
            MENU
            <div class="dropdown-content">
                <a class="dropdown-item active" href="contact.php">CONTACT US</a>
                <a class="dropdown-item" href="home.php">HOME</a>
                <a class="dropdown-item" href="gallery.php">Gallery</a>
                <a class="dropdown-item" href="cv.php">CV</a>
            </div>
        </li>
    </ul>

    <div class="contact-container">
        <h1 class="contact-title">Contact Us</h1>
        <div class="contact-info">
            <p class="items"><strong class="strong">Institution Name:</strong> Lebanese American University</p>
            <p class="items"><strong class="strong">Address:</strong> Beirut, Lebanon</p>
            <p class="items"><strong class="strong">Email:</strong> bader.berro@lau.edu</p>
            <p class="items"><strong class="strong">Phone:</strong> +961 76 947 135</p>
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>
