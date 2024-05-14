<?php

if (isset($_POST['sub'])) {
    include('conn.php');
    $name = $_POST['author'];
    $rating = $_POST['rating'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $pname = $_POST['p'];
    $title = $_POST['title'];
    $img = $_FILES['img']['name'];
    $imgt = $_FILES['img']['tmp_name'];
    move_uploaded_file($imgt, "reviewpics/" . $img);
    // $imgt= $_FILES['pimg']['size'];
    // $imgt= $_FILES['pimg']['type'];
    $rating = (int)$_POST['rating'];


    $sql = "INSERT INTO `review`(`name`, `email`, `rating`, `u_review`, `Product Name`, `title`, `img`) VALUES 
	('$name','$email','$rating','$comment','$pname','$title','$img')";
    mysqli_query($conn, $sql);
}
?>

<?php
include('header1.php')
?>


<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <h1 class="text-title-heading" style="text-decoration: solid;">
                        JEWELRY
                    </h1>

                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Bora Armchair
                    </div>
                </div>
            </div>
            <?php
            include('conn.php');

            if (isset($_GET['cosId'])) {
                $cosId = $_GET['cosId'];
                // Sanitize input using mysqli_real_escape_string
                $cosId = mysqli_real_escape_string($conn, $cosId);
                $sqlx = "SELECT * FROM `products` WHERE `id` = '$cosId'";
                $resultx = mysqli_query($conn, $sqlx);

                if ($rowx = mysqli_fetch_array($resultx)) {
            ?>

                    <div id="content" class="site-content" role="main">
                        <div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true" data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">
                            <div class="product-top-info">
                                <div class="section-padding">
                                    <div class="section-container p-l-r">
                                        <div class="row">


                                            <div class="product-images col-lg-7 col-md-12 col-12">
                                                <div class="row">

                                                    <div class="col-md-10">
                                                        <div class="scroll-image main-image">
                                                            <div class="image-additional slick-carousel" data-asnavfor=".image-thumbnail" data-fade="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                                <div>
                                                                    <img width="600" height="600" src="../skyy/prodimages/<?php echo $rowx['p_img']; ?>" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-info col-lg-5 col-md-12 col-12 ">
                                                <h4 class="title"><?php echo  'Product Name : ' . $rowx[1]; ?></h4>
                                                <span class="price">

                                                    <ins><span><?php echo 'Product Price : ' . $rowx[2]; ?></span></ins>
                                                </span>

                                                <div class="description">
                                                    <p><?php echo 'Product Description :  ' . $rowx[3]; ?></p>
                                                </div>

                                                <div class="buttons">
                                                    <div class="add-to-cart-wrap">

                                                        <div data-title="Add to cart">
                                                            <form method="post">
                                                                <input type="hidden" name="prodid" value="<?php echo $rowx['id']; ?>">
                                                                <a href="atc.php?prodid=<?php echo $rowx['id']; ?>" class="button button-outline border-black">Add to Cart</a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="btn-quick-buy" data-title="Wishlist">
                                                        <!-- <button class="product-btn">Buy It Now</button> -->
                                                        <a class="product-btn" href="checkout.php">Buy It Now</a>
                                                    </div>

                                                </div>
                                                <div class="product-meta">
                                                    <!-- <span class="sku-wrapper">SKU: <span class="sku">D2300-3-2-2</span></span> -->
                                                    <span class="posted-in">Category: <a href="shop-grid-left.html" rel="tag">Bracelets</a></span>
                                                    <!-- <span class="tagged-as">Tags: <a href="shop-grid-left.html" rel="tag">Hot</a>, <a href="shop-grid-left.html" rel="tag">Trend</a></span> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?PHP
                }
            }
                    ?>





                    <div class="product-tabs">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="product-tabs-wrap">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        </div>
                                        <div class="tab-pane fade" id="additional-information" role="tabpanel">
                                            <table class="product-attributes">
                                                <tbody>
                                                    <tr class="attribute-item">
                                                        <th class="attribute-label">Color</th>
                                                        <td class="attribute-value">Antique, Chestnut, Grullo</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <div id="reviews" class="product-reviews">
                                                <div id="comments">

                                                    <ol class="comment-list">
                                                        <?php
                                                        include('conn.php');
                                                        $sql = "SELECT * FROM `review`";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_array($result)) {

                                                        ?>
                                                            <li class="review">
                                                                <div class="content-comment-container">
                                                                    <div class="comment-container">
                                                                        <img src="media/user.jpg" class="avatar" height="60" width="60" alt="">
                                                                        <div class="comment-text">
                                                                          
                                                                            <div class="review-author"><?php echo $row[1]; ?></div>
                                                                            <div class="review-time"><?php echo $row[8]; ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="description">
                                                                        <p><?php echo $row[4]; ?></p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                    </ol>
                                                <?php
                                                        }

                                                ?>
                                                </div>

                                                <div id="review-form">
                                                    <div id="respond" class="comment-respond">
                                                        <span id="reply-title" class="comment-reply-title">Add a review</span>
                                                        <form method="post" class="comment-form" enctype="multipart/form-data">
                                                            <p class="comment-notes">
                                                                <span>Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                            </p>
                                                            <div class="comment-form-rating">
                                                                <label for="rating">Your rating</label>
                                                                <p class="stars" id="star-rating" style>
                                                                    <span>
                                                                        <a class="star-1" href="#" data-rating="1">1</a>
                                                                        <a class="star-2" href="#" data-rating="2">2</a>
                                                                        <a class="star-3" href="#" data-rating="3">3</a>
                                                                        <a class="star-4" href="#" data-rating="4">4</a>
                                                                        <a class="star-5" href="#" data-rating="5">5</a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <input type="hidden" id="selected-rating" name="rating" value="0">

                                                            <p class="comment-form-comment">
                                                                <textarea name="comment" placeholder="Your Reviews *" cols="45" rows="8" aria-required="true" required=""></textarea>
                                                            </p>
                                                            <div class="content-info-reviews">
                                                                <p class="comment-form-author">
                                                                    <input name="author" placeholder="Name *" type="text" value="" size="30" aria-required="true" required="">
                                                                </p>
                                                                <p class="comment-form-author">
                                                                    <input name="p" placeholder="Product Name *" type="text" value="" size="30" aria-required="true" required="">
                                                                </p>
                                                                <p class="comment-form-email">
                                                                    <input name="email" placeholder="Email *" type="email" value="" size="30" aria-required="true" required="">
                                                                </p>
                                                                <p class="comment-form-email">
                                                                    <input name="title" placeholder="Title *" type="text" value="" size="30" aria-required="true" required="">
                                                                </p>

                                                                <div class="form-group">
                                                                    <input type="file" name="img" value="" />
                                                                </div>

                                                                <p class="form-submit">
                                                                    <input name="sub" type="submit" class="submit" value="Submit">
                                                                </p>
                                                            </div>
                                                        </form><!-- #respond -->
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-related">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="block block-products slider">
                                    <div class="block-title">
                                        <h2>Related Products</h2>
                                    </div>
                                    <?php
                                    include('conn.php');
                                    $sql = "SELECT * FROM `products`";
                                    $result = mysqli_query($conn, $sql);
                                    ?>

                                    <div class="block-content">
                                        <div class="content-product-list slick-wrap">
                                            <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="shop-grid-jewelry.php">
                                                                            <img width="600" height="600" src="../skyy/prodimages/<?php echo $row[5]; ?>" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-button">


                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">


                                                                        <h3 class="product-title"><a href="shop-grid-jewelry.php"><?php echo 'Product Name:  ' . $row[1]; ?></a></h3>
                                                                        <span class="price"><?php echo 'Product Price:  $' . $row[2]; ?></span>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div data-title="Add to cart">
                                                                    <form method="post">
                                                                        <input type="hidden" name="prodid" value="<?php echo $row['id']; ?>">
                                                                        <a href="atc.php?prodid=<?php echo $row['id']; ?>" class="button button-outline border-black">Add to Cart</a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>


                                </div><!-- #content -->
                            </div><!-- #primary -->
                        </div><!-- #main-content -->
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const starRating = document.getElementById('star-rating');
                            const selectedRating = document.getElementById('selected-rating');

                            starRating.addEventListener('click', function(event) {
                                if (event.target && event.target.tagName === 'A') {
                                    event.preventDefault(); // Prevent the default behavior (i.e., redirection)

                                    const rating = event.target.getAttribute('data-rating');
                                    selectedRating.value = rating;

                                    // Remove any existing 'selected' class from all stars
                                    const stars = starRating.querySelectorAll('a');
                                    stars.forEach(star => star.classList.remove('selected'));

                                    // Add 'selected' class to the clicked star and all preceding stars
                                    event.target.classList.add('selected');
                                    const precedingStars = event.target.parentElement.querySelectorAll('a.star-1, a.star-2, a.star-3, a.star-4');
                                    precedingStars.forEach(star => star.classList.add('selected'));
                                }
                            });
                        });
                    </script>


                    <?php
                    include('footer.php')
                    ?>