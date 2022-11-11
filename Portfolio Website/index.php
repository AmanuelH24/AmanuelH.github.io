<?php
    date_default_timezone_set("America/Chicago");
    $current_timezone = date_default_timezone_get();
    echo "<p>".date("F jS Y, l, h:i:s A")."</p>"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>Amanuel Hailemariam Portfolio</title>
        
        <!-- icon -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <!-- Scroll Top -->
        <a href="#home" class="scroll-top">
            <i class="bx bx-up-arrow-alt"></i>
        </a>
        <header>
            <div class="nav container">
                <a href="#" class="logo">Amanuel Hailemariam</a>
                <ul class="navbar">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#acp" class="nav-link">After College Plan</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
                <!-- Menu Icon -->
                <div class="menu-icon">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </header>
        <!-- Home -->
        <section class="home container" id = "home">
            <div class="home-content">
                <div class="home-img">
                    <img src="profile.png" alt="">
                </div>
                <div class="home-text">
                    <h3>Hello</h3>
                    <h2>My name is <span class="color">Amanuel Hailemariam</span></h2>
                    <p>
                        I am<span class="color"> a student</span> at the university of Missouri, Columbia <span class="color">studying</span> Information Technology.
                        <br> Here's a bit more<span class="color"> about me.</span>
                    </p>

                    <!-- social -->
                    <div class="social">
                        <a href="https://www.linkedin.com/in/amanuel-hailemariam-3b176a22b/"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://github.com/AmanuelH24"><i class='bx bxl-github'></i></a>
                        <a href="https://www.instagram.com/?hl=en"><i class='bx bxl-instagram'></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="about container" id="about">
            <!-- Heading -->
            <h2 class="heading">About</h2>
            <!-- About Content -->
            <div class="about-content">
                <div class="about-data">
                    <span>About Me</span>
                    <h2> I am intersted in Web Development and <br> Cyber Security </h2>
                    <a href="AmanuelHailemariamResume.docx" class="btn" download="">
                        Download Resume
                        <i class='bx bx-download'></i>
                    </a>
                </div>
                <div class="about-text">
                    <p>I was born in Ethiopia and moved to the United States when I was 12 years old.</p>
                    <p>I enjoy playing soccer and music instruments like, the Piano and Guitar.</p>
                    <p>I also enjoy working computer related matrials like, Web Development.</p>
                </div>
            </div>
        </section>
        <!-- After college plan -->
        <section class="acp container" id="acp">
            <!-- Heading -->
            <h2 class="heading">After College Plan</h2>
            <!-- About Content -->
            <div class="acp-content">
                <div class="acp-data">
                    <span>After College</span>
                    <h2> After Graduating <br> from College</h2>
                </div>
                <div class="acp-text">
                    <p>I am planing on working as a Web Developer or in the Cyber Security industry.</p>
                    <p>I also want try out the Software Developing side but I haven't started looking into it yet.</p>
                    <p>I might also continue studying to get my Masters and PHD but that's the long term goal.</p>
                    <p>I also love planes so much so I want to get my private pilot license at some point.</p> 
                </div>
            </div>
        </section>
        <!-- Contact Form -->
        <section class="contact container" id="contact">
            <!-- Heading -->
            <h2 class="heading">Contact</h2>
            <!-- contact Form -->
            <form action="" class="contact-form" id="contact-form">
                <input type="text" placeholder="Your Name" class="name" required>
                <input type="email"name="" id="" placeholder="Email address..." class="email" required>
                <textarea name="" id="" cols="30" rows="10" placeholder="Write message here..." class="message" required></textarea>
                <input type="submit" value="send" class="send-btn">
            </form>

        </section>
        <!-- Footer -->
        <section class="footer container" id="footer">
            <div class="social">
                <a href="mailto:amanuelfha@gmail.com"><i class='bx bx-envelope'></i></a>
                <a href="https://www.linkedin.com/in/amanuel-hailemariam-3b176a22b/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/AmanuelH24"><i class='bx bxl-github'></i></a>
                <a href="https://www.instagram.com/?hl=en"><i class='bx bxl-instagram'></i></a>
            </div>
            <!-- Footer Links -->
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms Of Use</a>
            </div>
            <!-- copyright -->
            <p>&#169; Amanuel Hailemariam 2022</p>
        </section>


        <!-- Email js Link -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <!-- Sweet Alert js link -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            (function(){
            emailjs.init("YoU73ES6cmqh-8xUa");// you will use your email js api key here
            })();
        </script>
        <!-- Link To Js -->
        <script src="main.js"></script>
        

    </body>
</html>