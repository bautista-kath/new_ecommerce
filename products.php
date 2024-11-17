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
        <title>Shop | Antiquity</title>
        <link rel="icon" type="image/png" href="./icons/mainlogo.png" sizes="48x48">
        <link rel='stylesheet' type='text/css' media='screen' href='./css/default.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/border.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/header.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/navigation.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/backgrounds.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/product.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/subscribe.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/footer-section.css'>
        <?php include "./include/db_connect.php"; ?>
        <script src="./js/store.js"></script>
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
            <div id="product-section">
                <div class="product-content">
                    <div class="product-header">
                        <div class="menu-bar">
                            <div class="menu"></div>
                            <div class="menu"></div>
                            <div class="menu"></div>
                        </div>
                        <h3 class="product-header-text">All Categories</h3>
                        <div class="product-search-container">
                            <input type="text" placeholder="Search for Products or Category" class="product-search" name="search">
                            <button type="button" class="product-search-button"><img src="icons/search-icon.png" width="22px" height="22px" alt="search icon"</button>
                        </div>
                        <div class="product-header-icons">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img class="head-icons" src="./icons/bell-icon.png" width="22px" height="22px" alt="bell icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="head-icons" src="./icons/phone-icon.png" width="22px" height="22px" alt="phone icon">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-intro">
                        <div id="backgrounds">
                            <img class="product-main-00" src="./images/backgrounds/product-main-00.png" alt="a sword with black background">
                        </div>
                        <div class="product-intro-content">
                            <div class="product-intro-content-text">
                                <h3 class="product-intro-content-sub-title">ALL HIGH QUALITY PRODUCTS</h3>
                                <h2 class="product-intro-content-title">Forged in Ice and Fire Weaponry</h2>
                                <p class="product-intro-content-text">Forged in Ice and Fire is it produces to a high certainty product that comply with the customer's desire.</p>
                                <a class="product-intro-button" href="#"><button type="button">Shop Now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-main">
                        <table class="product-list">
                            <thead class="product-list-header">
                                <tr>
                                    <td>
                                        <h2>Popular Sale Today</h2>
                                    </td>
                                </tr>
                            </thead>
                            <tbody class="product-list-main">
                                <tr>
                                    <td>
                                        <div class="product-container">
                                            <ul>
                                                <li>
                                                    <div class="product-container-content">
                                                        <h3 class="product-container-item-title">Crusader Sword</h3>
                                                        <img class="product-container-image" src="./images/pictures/crusader-sword-01.jpg" width="230px" height="230px" alt="crusader sword">
                                                        <div class="product-rating">
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-00.png" width="10px" height="10px" alt="star"</span>
                                                        </div>
                                                        <div class="product-container-item-icons">
                                                            <h3 class="product-container-item-price">₱1,599</h3>
                                                            <ul>
                                                                <li>
                                                                    <button class="add_to_cart" onclick="addToCart1();">
                                                                        <img class="shop-icons" src="./icons/cart-icon.png" width="22px" height="22px" alt="cart icon">
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button>
                                                                        <img class="shop-icons" src="./icons/heart-icon.png" width="22px" height="22px" alt="heart icon">
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-container">
                                            <ul>
                                                <li>
                                                    <div class="product-container-content">
                                                        <h3 class="product-container-item-title">Crusader Armour</h3>
                                                        <img class="product-container-image" src="./images/pictures/crusader-armour-00.jpg" width="230px" height="230px" alt="crusader armour">
                                                        <div class="product-rating">
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-00.png" width="10px" height="10px" alt="star"</span>
                                                        </div>
                                                        <div class="product-container-item-icons">
                                                            <h3 class="product-container-item-price">₱2,799</h3>
                                                            <ul>
                                                                <li>
                                                                    <button class="add_to_cart" onclick="addToCart2();">
                                                                        <img class="shop-icons" src="./icons/cart-icon.png" width="22px" height="22px" alt="cart icon">
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button>
                                                                        <img class="shop-icons" src="./icons/heart-icon.png" width="22px" height="22px" alt="heart icon">
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-container">
                                            <ul>
                                                <li>
                                                    <div class="product-container-content">
                                                        <h3 class="product-container-item-title">Charlemagne's Sword</h3>
                                                        <img class="product-container-image" src="./images/pictures/charlemagne-sword.jpg" width="230px" height="230px" alt="charlemagne-sword sword">
                                                        <div class="product-rating">
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                        </div>
                                                        <div class="product-container-item-icons">
                                                            <h3 class="product-container-item-price">₱10,999</h3>
                                                            <ul>
                                                                <li>
                                                                    <button class="add_to_cart" onclick="addToCart3();">
                                                                        <img class="shop-icons" src="./icons/cart-icon.png" width="22px" height="22px" alt="cart icon">
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button>
                                                                        <img class="shop-icons" src="./icons/heart-icon.png" width="22px" height="22px" alt="heart icon">
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-container">
                                            <ul>
                                                <li>
                                                    <div class="product-container-content">
                                                        <h3 class="product-container-item-title">Crusader Flag</h3>
                                                        <img class="product-container-image" src="./images/pictures/crusader-flag-01.jpg" width="230px" height="230px" alt="crusader flag">
                                                        <div class="product-rating">
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-00.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-00.png" width="10px" height="10px" alt="star"</span>
                                                        </div>
                                                        <div class="product-container-item-icons">
                                                            <h3 class="product-container-item-price">₱1,099</h3>
                                                            <ul>
                                                                <li>
                                                                    <button class="add_to_cart" onclick="addToCart4();">
                                                                        <img class="shop-icons" src="./icons/cart-icon.png" width="22px" height="22px" alt="cart icon">
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button>
                                                                        <img class="shop-icons" src="./icons/heart-icon.png" width="22px" height="22px" alt="heart icon">
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-container">
                                            <ul>
                                                <li>
                                                    <div class="product-container-content">
                                                        <h3 class="product-container-item-title">Crusader History Book</h3>
                                                        <img class="product-container-image" src="./images/pictures/crusader-book-00.png" width="230px" height="230px" alt="crusader book">
                                                        <div class="product-rating">
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-00.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-00.png" width="10px" height="10px" alt="star"</span>
                                                        </div>
                                                        <div class="product-container-item-icons">
                                                            <h3 class="product-container-item-price">₱599</h3>
                                                            <ul>
                                                                <li>
                                                                    <button class="add_to_cart" onclick="addToCart5();">
                                                                        <img class="shop-icons" src="./icons/cart-icon.png" width="22px" height="22px" alt="cart icon">
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button>
                                                                        <img class="shop-icons" src="./icons/heart-icon.png" width="22px" height="22px" alt="heart icon">
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-container">
                                            <ul>
                                                <li>
                                                    <div class="product-container-content">
                                                        <h3 class="product-container-item-title">Crusader Gauntlet</h3>
                                                        <img class="product-container-image" src="./images/pictures/crusader-gauntlet.jpg" width="230px" height="230px" alt="crusader gauntlet">
                                                        <div class="product-rating">
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                            <span><img src="./icons/star-icon-01.png" width="10px" height="10px" alt="star"</span>
                                                        </div>
                                                        <div class="product-container-item-icons">
                                                            <h3 class="product-container-item-price">₱8,599</h3>
                                                            <ul>
                                                                <li>
                                                                    <button class="add_to_cart" onclick="addToCart6();">
                                                                        <img class="shop-icons" src="./icons/cart-icon.png" width="22px" height="22px" alt="cart icon">
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button>
                                                                        <img class="shop-icons" src="./icons/heart-icon.png" width="22px" height="22px" alt="heart icon">
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- CART -->
                        <div class="product-cart">
                            <div class="product-cart-content">
                                <table class=""product-container"">
                                    <h2 class="product-cart-title">Cart</h2>
                                    <tbody class="product-cart-main">
                                        <table>
                                            <tr>
                                                <td class="product-cart-sub-title">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <form class="product-form">
                                                                    <div>
                                                                        <input type="text" placeholder="Enter your Name" class="enter-name" name="name">
                                                                    </div>
                                                                    <br>
                                                                    <div>
                                                                        <input type="text" placeholder="Enter your Address" class="enter-add" name="address">
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>                                                  
                                                        </table>
                                                    <table>
                                                        <div class="border-line">
                                                            <hr>
                                                        </div>
                                                        <tr class="cart-content">
                                                            <td>
                                                                <h2 class="cart-content1">Product</h2>
                                                            </td>
                                                            <td>
                                                                <h2 class="cart-content2">Price</h2>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-user">
                                                            <td id="item">

                                                            </td>
                                                            <td id="price">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="product-cart-total">
                                            <div class="border-line">
                                                <hr>
                                            </div>
                                            <tr class="toquan">
                                                <td id="total">
                                                    <h2>Total</h2>
                                                </td>
                                                <td id="quantity">
                                                    <h2>Items</h2>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="product-cart-button">  
                                            <button id="placeorder" onclick="placeorder();">Place Order</button>
                                            <button id="checkout" onclick="checkout()">Checkout</button></a>
                                        </div>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="product-main-banner">
                            <div id="backgrounds">
                                <img class="product-main-01" src="./images/backgrounds/product-main-01.png" alt="a sword with black background">
                            </div>
                            <div class="product-banner-content">
                                <div class="product-banner-content-text">
                                    <h3 class="product-banner-content-sub-title">ALL HIGH QUALITY PRODUCTS</h3>
                                    <h2 class="product-banner-content-title">Weapons and Armours are 50% OFF!</h2>
                                    <a class="product-banner-button" href="#"><button type="button">Shop Now</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="product-footer-content">
                                <ul>
                                    <li>
                                        <img class="product-footer-icons" src="./icons/delivery-icon.png" width="64px" height="64px" alt="delivery van icon">
                                        <h3 class="product-footer-title">Fastest Deliver</h3>
                                        <p class="product-footer-sub-title">Delivery at your door step</p>
                                    </li>
                                    <li>
                                        <img class="product-footer-icons" src="./icons/24-hours-icon.png" width="64px" height="64px" alt="delivery van icon">
                                        <h3 class="product-footer-title">24/7 Services</h3>
                                        <p class="product-footer-sub-title">Reach us when needed</p>
                                    </li>
                                    <li>
                                        <img class="product-footer-icons" src="./icons/guaranteed.png" width="64px" height="64px" alt="delivery van icon">
                                        <h3 class="product-footer-title">Verified Brands</h3>
                                        <p class="product-footer-sub-title">Guaranteed Brands</p>
                                    </li>
                                    <li>
                                        <img class="product-footer-icons" src="./icons/assurance-icon.png" width="64px" height="64px" alt="delivery van icon">
                                        <h3 class="product-footer-title">100% Assurance</h3>
                                        <p class="product-footer-sub-title">We provide 100% assurance</p>
                                    </li>
                                </ul>
                            </div>
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
        <!-- Footer Section -->
        <footer id="footer">
            <section id="footer-container">
                <div id="footer-logo">
                    <a class="footer-logo-image" href="index.php">
                        <img src="./icons/mainlogo.png" width="64px" height="64px">
                    </a>
                    <a class="footer-logo-name" href="index.php">ANTIQUITY</a>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regalia.</p>
                </div>
                <!-- Services Section -->
                <div class="footer-section">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#">Weapons</a></li>
                        <li><a href="#">Armour</a></li>
                        <li><a href="#">Potions</a></li>
                        <li><a href="#">Supplies</a></li>
                    </ul>
                </div>
                <!-- About Section -->
                <div class="footer-section">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">Staff</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <!-- Resources Section -->
                <div class="footer-section">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <!-- Social Section -->
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
            <!-- Legal Section -->
            <div id="footer-legal">
                <span><p>©2023 ANTIQUITY, INC. All Rights Reserved.</p></span>
                <span><p>All trademarks referenced herein are the properties of their respective owners.</p></span>
                <a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">Compliances</a>
            </div>
        </footer>
    </body>
</html>