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
        <link rel='stylesheet' type='text/css' media='screen' href='./css/register.css'>

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
        <!-- MAIN SECTION -->
        <main>
        <div class="form-container">
            <h2>Register</h2>
            <form id="registerForm" action="register.php" method="POST">
                <div class="form-step active" id="step-1">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <button type="button" onclick="nextStep()">Next</button>
                </div>

                <!-- Step 2: Username and Password -->
                <div class="form-step" id="step-2">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                        <span id="usernameError">Username is already taken.</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="button" class="btn-secondary" onclick="previousStep()">Go Back</button>
                    <button type="submit" id="submitButton">Register</button>
                </div>
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
    <script>
        function nextStep() {
            document.getElementById('step-1').classList.remove('active');
            document.getElementById('step-2').classList.add('active');
        }

        function previousStep() {
            document.getElementById('step-2').classList.remove('active');
            document.getElementById('step-1').classList.add('active');
        }

        document.getElementById('username').addEventListener('blur', function() {
            const username = this.value;
            fetch(`check_username.php?username=${username}`)
                .then(response => response.json())
                .then(data => {
                    if (data.exists) {
                        document.getElementById('usernameError').style.display = 'block';
                        document.getElementById('submitButton').disabled = true;
                    } else {
                        document.getElementById('usernameError').style.display = 'none';
                        document.getElementById('submitButton').disabled = false;
                    }
                });
        });
    </script>
</html>
