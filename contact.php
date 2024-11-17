<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1, viewport-fit=cover'>
        <meta name="description" content="Antiquity is a Medieval E-commerce dedicated to present the 13th century medieval commodities in the world." />
        <meta property="og:site_name" content="Antiquity" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Antiquity" />
        <meta property="og:url" content="https://www.Antiquity.com/" />
        <title>Contact | Antiquity</title>
        <link rel="icon" type="image/png" href="./icons/mainlogo.png" sizes="48x48">
        <link rel='stylesheet' type='text/css' media='screen' href='./css/default.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/border.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/header.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/navigation.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/backgrounds.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/contact-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/subscribe.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/footer-section.css'>
        <?php include "./include/db_connect.php"; ?>
    </head>
    <body bgcolor="white">
        <!-- HEADER SECTION -->
        <header id="header">
            <div id="header-logo">
                <a class="header-logo-image" href="index.php">
                    <img src="./icons/mainlogo.png" width="64px" height="64px">
                </a>
                <a class="header-logo-name" href="index.php">ANTIQUITY</a>
            </div>
            <!-- NAV SECTION -->
            <nav id="nav">
                <ul class="navleft-links">
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Shop</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <ul class="navright-links">
                    <li><a class="account" href="#">Account</a></li>
                    <li><a class="log-in" href="login.php">Log In</a></li>
                </ul>
            </nav>        
        </header>
        <main>
            <div id="contact-section">
                <div id="backgrounds">
                    <img class="contact-background" src="./images/backgrounds/contact-background.jpg" alt="(flipped) an empty room and a throne">
                </div>
                <div class="contact-content">
                    <div class="contact-container">
                        <div class="contact-header">
                            <h2 class="contact-sub-title">Contact Us</h2>
                            <h2 class="contact-title">We want to hear from you</h2>
                        </div>
                        <div class="contact-main">
                            <div class="contact-main-content">
                                <h2 class="content-left-title">Contact Us</h2>
                                <p class="content-right-description">
                                    <b>The Antiquity</b><br><br>
                                    Sir Heisenberg<br>
                                    SEA-112-442, Manila, Philippines<br><br>
                                </p>
                            </div>        
                        </div>
                        <hr>
                        <div class="contact-second-main">
                            <div class="contact-second-content">
                                <h2 class="second-content-left-title">Feedback reviews and Refund products</h2>
                                <p class="second-content-right-description">
                                For information about our events and products, please contact us first to verify your products and accomodate the issue.<br><br>
                                If you need access to our event assets, contact us to requests or wish to be part of our unlimited programs, please contact: antiquity@gmail.com</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <form class="subscribe">
                    <h3 class="subscribe-container-title">Let's stay in touch</h3>
                    <p class="subscribe-container-description">Subscribe to our financial reports and product releases.</p>
                    <span class="emailbar">
                        <input type="text" placeholder="Enter your Email Address" class="enterEmail" name="email">
                    </span>
                    <p class="subscribe-description">By subscribing I agree that the information is sent to third party in accordance to the Privacy Policy.</p>
                    <a class="subscribe-button" href="#"><button type="button">Subscribe</button></a>
                </form>
            </div>
        </main>
        <!-- FOOTER SECTION -->
        <footer id="footer">
            <section id="footer-container">
                <div id="footer-logo">
                    <a class="footer-logo-image" href="index.php">
                        <img src="./icons/mainlogo.png" width="64px" height="64px">
                    </a>
                    <a class="footer-logo-name" href="index.php">ANTIQUITY</a>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regalia.</p>
                </div>
                <div class="footer-section">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#">Weapons</a></li>
                        <li><a href="#">Armour</a></li>
                        <li><a href="#">Potions</a></li>
                        <li><a href="#">Supplies</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">Staff</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Social</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </section>
            <div id="footer-legal">
                <span><p>©2023 ANTIQUITY, INC. All Rights Reserved.</p></span>
                <span><p>All trademarks referenced herein are the properties of their respective owners.</p></span>
                <a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">Compliances</a>
            </div>
        </footer>
    </body>
</html>