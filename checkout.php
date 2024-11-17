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
        <title>Checkout | Antiquity</title>
        <link rel="icon" type="image/png" href="./icons/mainlogo.png" sizes="48x48">
        <link rel='stylesheet' type='text/css' media='screen' href='./css/default.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/border.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/header.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/navigation.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/backgrounds.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/checkout.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/subscribe.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/general-footer.css'>
        <script src="./js/store.js"></script>
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
        <main id="main">
            <div id="checkout-section">
                <div class="checkout-content">
                    <div class="checkout-header">
                        <h2>Thank you for Purchasing</h2>
                    </div>
                    <div class="checkout-main">
                        <div class="checkout-main-content">
                            <h3 class="customer-name">Customer Name:</h3>
                            <h3 class="customer-address">Customer Address: </h3>
                            <hr>
                            <h5 id="total">Total:</h5>
                            <h5 id="quantity">Product Items: </h5>
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
        <footer id="general-footer">
            <div id="footer">
                <div class="footer-section">
                    <div class="footer-content">
                        <div class="footer-main">
                            <div class="footer-logo">
                                <a class="header-logo-name" href="index.php">CRUSADER</a>
                            </div>
                            <div class="social-mediaIcons">
                                <ul>
                                    <li>
                                        <a href="facebook.com"><img src="./icons/facebook.png" width="32px" height="32px "alt="facebook icon"</a>
                                    </li>
                                    <li>
                                        <a href="twitter.com"><img src="./icons/twitter.png" width="32px" height="32px "alt="twitter icon"</a>
                                    </li>
                                    <li>
                                        <a href="instagram.com"><img src="./icons/instagram.png" width="32px" height="32px "alt="instagram icon"</a>
                                    </li>
                                    <li>
                                        <a href="youtube.com"><img src="./icons/youtube.png" width="32px" height="32px "alt="youtube icon"</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-description">
                                <span class="footer-text"><p>©2023 CRUSADER, INC. ALL RIGHTS RESERVED.</p></span>
                                <span class="footer-text"><p>All trademarks referenced herein are the properties of their respective owners.</p></span>
                                <span class="footer-text"><p>Do not sell or share my personal information</p></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>