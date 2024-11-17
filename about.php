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
        <title>About | Antiquity</title>
        <link rel="icon" type="image/png" href="./icons/mainlogo.png" sizes="48x48">
        <link rel='stylesheet' type='text/css' media='screen' href='./css/default.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/border.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/header.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/navigation.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/backgrounds.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/about-section.css'>
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
                    <li><a class="sign-in" href="login.php">Log In</a></li>
                </ul>
            </nav>        
        </header>
        <main>
            <div id="about-section">
                <div id="backgrounds">
                    <img class="about-background" src="./images/backgrounds/about-background.png" alt="an empty room and a throne">
                </div>
                <div class="about-content">
                    <div class="about-container">
                        <div class="about-header">
                            <h2 class="about-sub-title">About Us</h2>
                            <h2 class="about-title">Who We are?</h2>
                        </div>
                        <div class="about-main">
                            <div class="about-main-content">
                                <h2 class="content-left-title">The Antiquity Group</h2>
                                <p class="content-right-description">
                                <b>Our vision is to make the world a memorable place.</b><br><br>
                                The Antiquity group today consists of both publishing and producing of weapons, armours and 13th century commodities. Our shared goal is to provide an exhilarating feels in Medieval Century particularly about the Antiquity's of Western and Eastern Europe Christendoms to our ever-growing community.<br><br>
                                The Antiquity group providess more than 500 high quality of weapons and armours, including <span class="p-und">Charlemagne's Sword</span>, <span class="p-und">Fredrich's Dagger</span>, <span class="p-und">Crusader Sword</span>, <span class="p-und">Holy Helm of Jerusalem</span>, <span class="p-und">Gauntlet of Knight's of Hospitaller</span> and <span class="p-und">the Teutonic Knight's flags</span>.<br><br>
                                The First Medieval ECommerce in the Philipppines was founded in 2023 and we have produce our works and programs all over the world. The Antiquity was founded primarily for people who are medieval enthusiast and history nerds, but we also consider people to join us to be part of our community. Our largest markets include the China, Indonesia, Mongolia, Russia, India, Vietnam, Thailand, Laos, Malaysia, Singapore and Brunei. Over one million customers have been enjoying our products each month.<br><br>
                                Antiquity's head offices are located in Manila, Philippines. Some of our branch offices are located in Beijing, China, in Bandar Seri Begawan, Brunei, in Kuala Lumpur, Malaysia, in New Delhi, India, in Moskva, Russia and in Singapore.<br><br></span>
                                For more information, please visit antiquity.com/contact, join our forums and follow us on Facebook and Twitter</span>.<br><br></p>
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