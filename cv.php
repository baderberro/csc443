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
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/images/terminal.svg/" type="image/svg">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="dropdown">
        <button class="dropbtn">MENU</button>
        <div class="dropdown-content">
            <a class="dropdown-item active" href="cv.php">CV</a>
            <a class="dropdown-item" href="home.php">HOME</a>
            <a class="dropdown-item" href="gallery.php">GALLERY</a>
            <a class="dropdown-item" href="contact.php">CONTACT US</a>
        </div>
    </div>
    <div class="container">
        <div class="profile">
            <div class="profile_container">
                <div class="profile_profileImg">
                    <img src="mypic.png" alt="Bader Berro">
                </div>
                <div>
                    <h1 class="profile_name">
                        <span class="first_name">Bader</span> 
                        <span class="last_name">Berro</span>
                    </h1>
                    <p class="profile_title">Computer Science Student</p>
                    <p class="description">
                        I'm a second-year student at the Lebanese American University. I'm a curious individual, always eager to expand my horizons and explore new fields, 
                        even beyond my major. Passionate about software development and penetration testing in the cybersecurity domain, I'm dedicated to honing my skills 
                        and knowledge in these areas. Seeking opportunities to gain real-life experience, I'm excited to contribute my enthusiasm and expertise to projects 
                        that make a positive impact in the tech industry.   
                    </p>
                    <a id="downloadBtn" href="./cv.pdf" download="Resume.pdf">Download</a>
                </div>
            </div>
        </div>
        <div class="group-1">
            <div class="skills">
                <h3 class="title">Skills</h3>
                <ul class="skill_list description">
                    <li>SQL</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>HTML & CSS & JavaScript</li>
                    <li>Object-Oriented Programming</li>
                    <li>Algorithms and Data Strcutures</li>
                </ul>
            </div>
            <div class="projects">
                <h3 class="title">Projects</h3>
                <div class="proj_item">
                    <h4 class="proj_name">Hospital Management System (HMS)</h4>
                    <p class="description">The Hospital Management System (HMS) project is a full stack java app which stearmlines hospital operations.
                        It is a software solution that uses Java Swing for the Front-End (GUI) and MySQL for the Back-End (Database).
                    </p>
                </div>
                <div class="proj_item">
                    <h4 class="proj_name">Reduced Instruction Set Computer (RISC)</h4>
                    <p class="description">The Reduced Instruction Set Computer (RISC) architecture is a project which focuses 
                        on simplicity and efficiency. It aims to design a processor with a minimal set of instructions to execute tasks faster and with reduced 
                        power consumption. </p>
                </div>
            </div>
            <div class="edu">
                <h3 class="title">Education</h3>
                <div class="edu_item">
                    <p class="item_preTitle">2022 - Present</p>
                    <h4 class="item_title">BS. in Computer Science</h4>
                    <p class="item_subtitle">
                        Lebanese American University
                    </p>
                </div>
                
            </div>
            <div class="languages">
                <h3 class="title">Languages</h3>
                <ul class="skill_list description">
                    <li>Arabic</li>
                    <li>English</li>
                    <li>French</li>
                    <li>Portuguese</li>
                </ul>
            </div>
        </div>
        <div class="group-2">
            <div class="exp">
                <h3 class="title">Experience</h3>
                <div class="exp_item">
                    <p class="item_preTitle">July 2023 - September 2023</p>
                    <h4 class="item_title">Integrated Digital Systems (Internship)</h4>
                    <p class="item_subtitle">Full Stack Developper Intern</p> 
                    <p class="description">
                        This internship opportunity offers a hands-on experience in building a full-stack web application using a diverse 
                        stack of technologies, including HTML, CSS, JavaScript, jQuery, AJAX, MySQL, and ASP.NET Core.
                    </p>
                </div>
            </div>
            <div class="awards">
                <h3 class="title">Awards</h3>
                 <div class="awards_item">
                    <p class="item_preTitle">2018</p>
                    <h4 class="item_title">Microsoft Excel Profiency Finalist</h4>
                    <p class="description">
                        I received this award by participating in the lebanese excel competition organized by Microsoft, the competition involves a 90mins test,
                        2 problem sets testing many functionalities like: Data Entry and Formatting, Mathematical and Statistical Functions, Formulas and Functions, 
                        Data Sorting and Filtering and Data Validation.
                    </p>
                 </div>
                 
            </div>
            <div class="interest">
                <h3 class="title">Interests</h3>
                <div class="interest_items">
                    <div class="interest_item">
                        <i data-feather="flag"></i>
                        <span>CTF</span>
                    </div>
                    <div class="interest_item">
                        <i data-feather="code"></i>
                        <span>Coding</span>
                    </div>
                    <div class="interest_item">
                        <i data-feather="map"></i>
                        <span>Travel</span>
                    </div>
                </div>
                
            </div>
        </div>
        <hr>
        <div class="group-3">
            <div class="contact">
                <h3 class="title">Contact</h3>
                <div class="contact_info">
                    <p class="description">
                        Beirut, Lebanon
                    </p>
                    <p class="description">
                        +961 76 947 135
                    </p>
                    <p class="description">
                        bader.berro@lau.edu
                    </p>
                </div>
            </div>
            <div class="socials">
                <h3 class="title">Socials</h3>
                <div class="social_items">
                    <a href="https://github.com/baderberro/" class="social_item" target="_blank">
                        <i data-feather="github"></i>
                        <span>/baderberro</span>
                    </a>
                    <a href="https://www.linkedin.com/in/baderberro/" class="social_item" target="_blank">
                        <i data-feather="linkedin"></i>
                        <span>/baderberro</span>
                    </a>
                    <a href="https://www.instagram.com/iambaderberro/" class="social_item" target="_blank">
                        <i data-feather="instagram"></i>
                        <span>/iambaderberro</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
      feather.replace();
    </script>
</body>
</html>