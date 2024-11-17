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
        <title>Login | Antiquity Accounts</title>
        <link rel="icon" type="image/png" href="./icons/mainlogo.png" sizes="48x48">
        <link rel='stylesheet' type='text/css' media='screen' href='./css/default.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/border.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/header.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/navigation.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/backgrounds.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/footer-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/login.css'>

        <?php 
            include "./include/db_connect.php"; 
        ?>
    </head>
    <body>
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
            <!-- LOGIN SECTION -->
            <section id="login-section">
                <div class="login-container">
                    <img class="login-image" src="./icons/mainlogo.png" width="105px" alt="A gauntlet holding a sword vertically.">
                    <h2 class="login-main-title">Welcome to Antiquity</h2>
                </div>
                <form action="login_process.php" method="POST" class="login-form">
                    <h2 class="login-title">Log In</h2>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Log In</button>
                    </div>
                    <div class="form-group">
                        <p>Don't have an account? <a href="register.php">Register here</a></p>
                    </div>
                </form>
            </section>
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