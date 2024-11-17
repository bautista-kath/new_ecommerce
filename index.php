<?php
    include('include/db_connect.php');
    include('functions/common_function.php');
?>


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
        <link rel='stylesheet' type='text/css' media='screen' href="./css/navigation.css">
        <link rel='stylesheet' type='text/css' media='screen' href='./css/backgrounds.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/intro-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/service-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/featured-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/join-us-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/footer-section.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/borders.css'>
        <!-- font awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <?php include "./include/db_connect.php"; ?>
        <script>
        function scrollToSection(sectionId) {
            event.preventDefault(); // Prevents the default anchor click behavior
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            } else {
                console.error(`No section found with id: ${sectionId}`);
            }
        }
        </script>

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
                    <!-- <li><a href="contact.php">Contact Us</a></li> -->
                </ul>
                <form class="d-flex" action="search_product.php" method="get"> 
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                </form>
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
                    <img class="intro-background" src="./images/backgrounds/regal-bg.png" alt="A medieval warrior kneeling with his sword embedded in the ground, symbolizing a knightly oath">
                </div>s
                <div class="intro-content">
                    <div class="intro-image">
                        <img src="./icons/chanel_logo.png" width="300px" alt="placeholder logo.">
                    </div>
                    <div class="intro-text">
                        <h1 class="intro-title">LOREM</h1>
                        <p class="intro-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="exploreshop-container">
                            <button class="exploreshop-button" type="button">
                                <img class="exploreshop-icon" src="./icons/exploreshop-icon.png" width="32px" height="32px" alt="christian cross">
                                EXPLORE OUR SHOP
                            </button>
                        </div>                        
                    </div>
                </div>
            </section>
            <!-- SERVICE SECTION GAGAWING RANDOM DISPLAYED PRODUCTS-->
            <!-- <div class="general-border-line"></div> -->
            <section id="service-section">
                <div id="backgrounds">
                    <img class="service-background" src="./images/backgrounds/white-bg.png" alt="a dark brick wall">
                </div>
                <div id="service-content">
                    <div class="service-body-containers">
                        <div class="service-container">
                            <img class="service-image-00" src="./images/backgrounds/service-1.png" width="100%" alt="praying guy">
                            <span class="service-border-line"></span>
                            <div class="service-content-container">
                                <div class="service-info">
                                    <h3 class="service-title">Lorem ipsum dolor sit amet</h3>
                                    <!-- <img class="service-icons" src="./icons/icon-03.png" width="52px" height="52px" alt="christian cross"> -->
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                        </div>                        
                        <div class="service-container">
                            <img class="service-image-01" src="./images/backgrounds/service-2.png" width="100%" alt="a">
                            <span class="service-border-line"></span>
                            <div class="service-content-container">
                                <div class="service-info">
                                    <h3 class="service-title">Lorem ipsum dolor sit amet</h3>
                                    <!-- <img class="service-icons" src="./icons/icon-04.png" width="52px" height="52px" alt="a hand with a sword raising in the air"> -->
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-container">
                            <img class="service-image-02" src="./images/backgrounds/service-3.png" width="100%" alt="a guy kneeling in front of vicar of christ">
                            <span class="service-border-line"></span>
                            <div class="service-content-container">
                                <div class="service-info">
                                    <h3 class="service-title">Lorem ipsum dolor sit amet</h3>
                                    <!-- <img class="service-icons" src="./icons/icon-05.png" width="52px" height="52px" alt="a faithful two hands"> -->
                                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="general-border-line"></div> -->
            </section>

            <!-- FEATURED SECTION -->
            <section id="featured-section">
                <div id="backgrounds">
                    <!-- <img class="featured-background" src="./images/backgrounds/featured-background.jpg" alt="just a texture dark gradient"> -->
                </div>
                <div class="featured-header">
                    <h2 class="featured-title">Clothing Categories</h2>
                    <div class="type-container">
                        <div class="type-product">
                            <a class="type-product-button" href="#" onclick="scrollToSection('womens-categories')"><button type="button">Womens</button></a>    
                        </div>
                        <div class="type-product">
                            <a class="type-product-button" href="#" onclick="scrollToSection('mens-categories')"><button type="button">Mens</button></a>    
                        </div>
                        <div class="type-product">
                            <a class="type-product-button" href="#" onclick="scrollToSection('unisex-categories')"><button type="button">Unisex</button></a>    
                        </div>
                    </div>
                </div>
                <!-- WOMENS CATEGORIES -->

                <div class="featured-main" id="womens-categories">
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/tops-women.jpg" width="100%" alt="crusader sword">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Tops</h3>
                                <p class="featured-product-subtitle">Womens Clothing</p>
                                <div class="featured-product-icons px-2">
                                    <i class="fas fa-female"></i>
                                    <i class="fas fa-tshirt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/bottoms-women.jpg" width="100%" alt="arab cutlass">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Bottoms</h3>
                                <p class="featured-product-subtitle">Womens Clothing</p>
                                <div class="featured-product-icons">
                                    <i class="fas fa-female"></i>
                                    <img src="./icons/trousers.png" width="24px" height="24px" alt="weapon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/dress.jpg" width="100%" alt="persian immortal helm">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Dresses</h3>
                                <p class="featured-product-subtitle">Womens Clothing</p>
                                <div class="featured-product-icons">
                                    <i class="fas fa-female"></i>
                                    <img src="./icons/dress.png" width="24px" height="24px" alt="misc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/outer.jpg" width="100%" alt="crusader shield">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Outerwear</h3>
                                <p class="featured-product-subtitle">Womens Clothing</p>
                                <div class="featured-product-icons">
                                    <i class="fas fa-female"></i>
                                    <img src="./icons/jacket.png" width="24px" height="24px" alt="shield">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/inner.jpg" width="100%" alt="persian rug">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Innerwear</h3>
                                <p class="featured-product-subtitle">Womens Clothing</p>
                                <div class="featured-product-icons">
                                    <i class="fas fa-female"></i>
                                    <img src="./icons/bra.png" width="24px" height="24px" alt="misc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>

                <!-- MENS CATEGORIES -->
                <div class="featured-main" id="mens-categories">
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/tops-men.png" width="100%" alt="char'a'ina set">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Tops</h3>
                                <p class="featured-product-subtitle">Mens Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/man.png" width="24px" height="24px" alt="misc">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/bottoms-men.png" width="100%" alt="french crossbow">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Bottoms</h3>
                                <p class="featured-product-subtitle">Mens Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/man.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/trousers.png" width="24px" height="24px" alt="weapon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/outer-men.png" width="100%" alt="greek achilles sword">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Outerwear</h3>
                                <p class="featured-product-subtitle">Mens Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/man.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/jacket.png" width="24px" height="24px" alt="shield">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/suits.jpg" width="100%" alt="arabian armour">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Formal</h3>
                                <p class="featured-product-subtitle">Mens Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/man.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/suit.png" width="24px" height="24px" alt="shield">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/innerwear-men.png" width="100%" alt="charlemagne sword">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Innerwear</h3>
                                <p class="featured-product-subtitle">Mens Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/man.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/belt.png" width="30px" height="30px" alt="shield">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br>

                <!-- UNISEX CLOTHING -->
                <div class="featured-main" id="unisex-categories">
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/i-productfeatured02.jpg" width="100%" alt="char'a'ina set">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">T-shirts</h3>
                                <p class="featured-product-subtitle">Unisex Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/unisex.png" width="24px" height="24px" alt="misc">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/e-productfeatured03.jpg" width="100%" alt="french crossbow">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Hoodies</h3>
                                <p class="featured-product-subtitle">Unisex Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/unisex.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/hoodie.png" width="24px" height="24px" alt="misc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/e-productfeatured04.jpg" width="100%" alt="greek achilles sword">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Activewear</h3>
                                <p class="featured-product-subtitle">Unisex Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/unisex.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/gym-clothes.png" width="24px" height="24px" alt="misc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/a-productfeatured01.jpg" width="100%" alt="arabian armour">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Hats</h3>
                                <p class="featured-product-subtitle">Unisex Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/unisex.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/hat.png" width="24px" height="24px" alt="misc">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-container">
                        <a href="#">
                            <img class="featured-image" src="./images/pictures/e-productfeatured02.jpg" width="100%" alt="charlemagne sword">
                        </a>
                        <div class="featured-product-content">
                            <div class="featured-product-info">
                                <h3 class="featured-product-title">Accessories</h3>
                                <p class="featured-product-subtitle">Unisex Clothing</p>
                                <div class="featured-product-icons">
                                    <img src="./icons/unisex.png" width="24px" height="24px" alt="misc">
                                    <img src="./icons/sunglasses.png" width="24px" height="24px" alt="misc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br><br>
                <div class="seeall-container">
                    <button class="seeall-button" type="button">
                        See All Products
                    </button>
                </div>       
            </section>
            
            
            <section id="join-us-section">
                <div id="backgrounds">
                    <img class="join-us-background" src="./images/backgrounds/join-us-background.png" alt="a camp">
                </div>
                <div class="join-us-content">
                    <div class="join-us-header">
                        <h2 class="join-us-title">Subscription & Newsletter</h2>
                        <p class="join-us-description">Sign up to receive your free special limited edition medieval satchel along with Antiquity News and Special Offers!</p>
                    </div>
                    <div class="join-us-main">
                        <form class="join-us-container">
                            <h3 class="join-us-container-title">Sign Up Now</h3>
                            <p class="join-us-required">Email*</p>
                            <input type="email" placeholder="Enter your Email Address" class="enterEmail" name="email" required>
                            <div class="subscription-container">
                                <input type="checkbox" id="newsletter-agree" checked>
                                <p class="agree-description">By subscribing, you agree to receive news and special offers from Antiquity.</p>
                            </div>
                            <div class="join-us-container-button">
                                <button type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>    
            <div class="general-border-line"></div>        
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