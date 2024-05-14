<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from caketheme.com/html/mojuri/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 18:20:47 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Collection | Mojuri</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png" />

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/feather-font/css/iconfont.css" type="text/css" />
    <link rel="stylesheet" href="libs/icomoon-font/css/icomoon.css" type="text/css" />
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="libs/wpbingofont/css/wpbingofont.css" type="text/css" />
    <link rel="stylesheet" href="libs/elegant-icons/css/elegant.css" type="text/css" />
    <link rel="stylesheet" href="libs/slick/css/slick.css" type="text/css" />
    <link rel="stylesheet" href="libs/slick/css/slick-theme.css" type="text/css" />
    <link rel="stylesheet" href="libs/mmenu/css/mmenu.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" />

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet" />
</head>
<style>
    /* Add this CSS to your existing stylesheet or in a <style> tag in your HTML */
</style>


<body class="home home-2 title-2">
    <div id="page" class="hfeed page-wrapper">
        <header id="site-header" class="site-header header-v2">
            <div class="header-mobile">
                <?php
                include('conn.php');

                // Initialize productCount to 0
                $productCount = 0;
                $totalPrice = 0;

                // Check if the user is logged in
                if (isset($_SESSION['id'])) {
                    $user_id = $_SESSION['id'];

                    // Modify your SQL query to select cart items for the logged-in user
                    $sqlx = "SELECT * FROM `add_to_cart`, `products`, `categories` WHERE add_to_cart.p_id = products.id AND add_to_cart.c_id = categories.id AND add_to_cart.user_id = $user_id;";
                    $resultx = mysqli_query($conn, $sqlx);
                    $productCount = mysqli_num_rows($resultx);
                }
                ?>
                <div class="section-padding">
                    <div class="section-container large">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                                <div class="site-logo">
                                    <a href="index.php">
                                        <img width="400" height="79" src="media/logo.png" alt="Mojuri – Jewelry Store HTML Template" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                                <div class="mojuri-topcart dropdown">
                                    <div class="dropdown mini-cart top-cart">
                                        <div class="remove-cart-shadow"></div>
                                        <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icons-cart">
                                                <i class="icon-large-paper-bag"></i><span class="cart-count"><?php echo $productCount; ?></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu cart-popup">
                                            <div class="cart-empty-wrap">
                                                <ul class="cart-list">
                                                    <li class="empty">
                                                        <?php
                                                        if ($productCount === 0 && !isset($_SESSION['id'])) {
                                                            echo 'You are not logged in. Please log in to view your cart.';
                                                        } else {
                                                            echo '<span >No products in the cart.</span>';
                                                            echo '<a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>';
                                                            echo '<h2>empty cart</h2>';
                                                        }
                                                        ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-list-wrap">
                                                <ul class="cart-list">
                                                    <?php
                                                    if ($productCount > 0) {
                                                        while ($rowx = mysqli_fetch_array($resultx)) {
                                                            $itemPrice = $rowx['p_price']; // Get the item's price
                                                            $totalPrice += $itemPrice; // Add the item's price to the total
                                                    ?>
                                                            <li class="mini-cart-item">
                                                                <a href="shop-details.php" class="product-image"><img width="600" height="600" src="../skyy/prodimages/<?php echo $rowx['p_img']; ?>" /></a>
                                                                <a href="shop-details.php" class="product-name"><?php echo 'Name : ' . $rowx['p_name']; ?></a>
                                                                <div class="price"><?php echo 'Price :$' . $rowx['p_price']; ?></div>
                                                                <a href="atcd.php?atc_id=<?php echo $rowx['atc_id'] ?>"><i class="fa fa-trash"></i></a>
                                                            </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="total-cart">
                                                <div class="title-total">Total:</div>
                                                <div class="total-price">
                                                    <span>$<?php echo number_format($totalPrice, 2); ?></span>
                                                </div>
                                            </div>
                                            <div class="free-ship">
                                                <div class="title-ship">
                                                    Buy <strong>$400</strong> more to enjoy
                                                    <strong>FREE Shipping</strong>
                                                </div>
                                                <div class="total-percent">
                                                    <div class="percent" style="width: 20%"></div>
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="cart.php" class="button btn view-cart btn-primary">View cart</a>
                                                <a href="checkout.php" class="button btn checkout btn-default">Check out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header-mobile-fixed">
                    <!-- Shop -->
                    <div class="shop-page">
                        <a href="shop-grid-left.html"><i class="wpb-icon-shop"></i></a>
                    </div>

                    <!-- Login -->
                    <div class="my-account">
                        <div class="login-header">
                            <a href="page-my-account.html"><i class="wpb-icon-user"></i></a>
                        </div>
                    </div>

                    

         
                </div>
            </div>

            <div class="header-desktop">
                <div class="header-wrapper">
                    <div class="section-padding">
                        <div class="section-container large p-l-r">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 header-left">
                                    <div class="header-page-link">
                                        <!-- Search -->
                                       
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 header-center">
                                    <div class="site-navigation left">
                                        <nav id="main-navigation">
                                            <ul id="menu-main-menu" class="menu">
                                                <li class="level-0 menu-item">
                                                    <a href="index.php"><span class="menu-item-text">Home</span></a>
                                                </li>
                                                <li class="level-0 menu-item menu-item-has-children">
                                                    <a href="shop-grid-cosmetics.php"><span class="menu-item-text">Shop</span></a>
                                                    <ul class="sub-menu">

                                                        <li>
                                                            <a href="shop-grid-cosmetics.php"><span class="menu-item-text">Shop Cosmetics</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-haircare.php"><span class="menu-item-text">Shop Haircare</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-skincare.php"><span class="menu-item-text">Shop - SkinCare</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-imitation-jew.php"><span class="menu-item-text">Shop Jewelry</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-grid-fragrances.php"><span class="menu-item-text">Shop Fragrances</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="site-logo">
                                        <a href="index.php">
                                            <img width="400" height="79" src="media/logo.png" alt="Mojuri – Jewelry Store HTML Template" />
                                        </a>
                                    </div>

                                    <div class="site-navigation right">
                                        <nav id="main-navigation">
                                            <ul id="menu-main-menu" class="menu">

                                                <li class="level-0 menu-item menu-item-has-children">
                                                    <a href="#"><span class="menu-item-text">Pages</span></a>
                                                    <ul class="sub-menu">

                                                        <li>
                                                            <a href="account.php"><span class="menu-item-text">My Account</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="page-about.html"><span class="menu-item-text">About Us</span></a>
                                                        </li>

                                                        <li>
                                                            <a href="page-faq.html"><span class="menu-item-text">FAQ</span></a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="level-0 menu-item">
                                                    <a href="page-contact.php"><span class="menu-item-text">Contact</span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>


                                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 header-right">
                                    <div class="header-page-link">
                       

                                        <!-- Cart -->
                                        <?php
                                        include('conn.php');

                                        // Initialize productCount to 0
                                        $productCount = 0;
                                        $totalPrice = 0;

                                        // Check if the user is logged in
                                        if (isset($_SESSION['id'])) {
                                            $user_id = $_SESSION['id'];

                                            // Modify your SQL query to select cart items for the logged-in user
                                            $sqlss = "SELECT * FROM `add_to_cart`, `products`, `categories` WHERE add_to_cart.p_id = products.id AND add_to_cart.c_id = categories.id AND add_to_cart.user_id = $user_id;";
                                            $resultss = mysqli_query($conn, $sqlss);
                                            $productCount = mysqli_num_rows($resultss);
                                        }
                                        ?>

                                        <div class="mojuri-topcart dropdown light">
                                            <div class="dropdown mini-cart top-cart">
                                                <div class="remove-cart-shadow"></div>
                                                <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="icons-cart">
                                                        <i class="icon-large-paper-bag"></i><span class="cart-count"><?php echo $productCount; ?></span>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu cart-popup">
                                                    <div class="cart-empty-wrap">
                                                        <ul class="cart-list">
                                                            <?php
                                                            if ($productCount === 0 && !isset($_SESSION['id'])) {
                                                                echo '<li class="empty">You are not logged in. Please log in to view your cart.</li>';
                                                            } else {
                                                                echo '<li class="empty">';
                                                                echo '<h2>empty cart</h2>';
                                                                echo '<span>No products in the cart.</span>';
                                                                echo '<a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>';
                                                                echo '</li>';
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="cart-list-wrap">
                                                        <ul class="cart-list">
                                                            <?php
                                                            if ($productCount > 0) {
                                                                while ($rowsss = mysqli_fetch_array($resultss)) {
                                                                    $itemPrice = $rowsss['p_price']; // Get the item's price
                                                                    $totalPrice += $itemPrice; // Add the item's price to the total
                                                            ?>
                                                                    <li class="mini-cart-item">
                                                                        <!-- <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a> -->

                                                                        <a href="shop-details.php" class="product-image"><img width="600" height="600" src="../skyy/prodimages/<?php echo $rowsss['p_img']; ?>" /></a>
                                                                        <a href="shop-details.php" class="product-name"><?php echo 'Name :' . $rowsss['p_name']; ?></a>
                                                                        <!-- <div class="quantity">Qty: 1</div> -->
                                                                        <div class="price"><?php echo 'Price :$ ' . $rowsss['p_price']; ?></div>
                                                                        <a href="atcd.php?atc_id=<?php echo $rowsss['atc_id'] ?>"><i class="fa fa-trash"></i></a>
                                                                    </li>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="total-cart">
                                                        <div class="title-total">Total:</div>
                                                        <div class="total-price">
                                                            <span>$<?php echo number_format($totalPrice, 2); ?></span>
                                                        </div>
                                                    </div>
                     
                                                    <div class="buttons">
                                                        <a href="cart.php" class="button btn view-cart btn-primary">View cart</a>
                                                        <a href="shop-checkout.php" class="button btn checkout btn-default">Check out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Standalone "Login/Logout" Button -->
                                        <div class="user_option">
                                            <?php
                                            if (!isset($_SESSION['id'])) {
                                            ?>
                                                <a href="page-login.php" class="btn btn-primary">Login</a>
                                            <?php
                                            } else {
                                            ?>
                                                <a href="logout.php" class="btn btn-danger">Logout</a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>