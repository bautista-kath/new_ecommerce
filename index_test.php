<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1, viewport-fit=cover'>
        <meta name="description" content="Antiquity is a Medieval E-commerce dedicated to present the 13th century medieval commodities in the world." />
        <meta property="og:site_name" content="Antiquity" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Antiquity" />
        <meta property="og:url" content="https://www.Antiquity.com/" />
        <title>Antiquity</title>
        <link rel="icon" type="image/png" href="./icons/mainlogo.png" sizes="48x48">
        <link rel='stylesheet' type='text/css' media='screen' href='./css/default.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/header.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/navigation.css'>
        <!-- <link rel='stylesheet' type='text/css' media='screen' href='./css/backgrounds.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/intro-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/service-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/featured-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/join-us-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/footer-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/borders.css'> -->
        <?php include "./include/db_connect.php"; ?>
    </head>
    <body>
        <!-- HEADER SECTION -->
        <header id="header">
            <div id="header-logo">
                <a class="header-logo-image" href="index.php">
                    <img src="./icons/mainlogo.png" width="64px" height="64px">
                </a>
                <a class="header-logo-name" href="index.php">FASHION</a>
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
            <!-- INTRO SECTION -->
            <section id="intro-section">
                <div id="backgrounds">
                    <img class="intro-background" src="./images/backgrounds/intro-background.png" alt="A medieval warrior kneeling with his sword embedded in the ground, symbolizing a knightly oath">
                </div>
                <div class="intro-content">
                    <div class="intro-image">
                        <img src="./icons/mainlogo.png" width="300px" alt="A gauntlet holding a sword vertically.">
                    </div>
                    <div class="intro-text">
                        <h1 class="intro-title">ANTIQUITY</h1>
                        <p class="intro-description">Step into a world where history meets craftsmanship. Antiquity is your gateway to the treasures of the Middle Ages, where every item tells a story and every purchase connects you with a rich heritage. Explore our curated collection of medieval artifacts, armor, apparel, and more—each piece a testament to the artistry and tradition of the 13th century.</p>
                        <div class="exploreshop-container">
                            <button class="exploreshop-button" type="button">
                                <img class="exploreshop-icon" src="./icons/exploreshop-icon.png" width="32px" height="32px" alt="christian cross">
                                EXPLORE OUR SHOP
                            </button>
                        </div>                        
                    </div>
                </div>
            </section>
    </body>
</html>