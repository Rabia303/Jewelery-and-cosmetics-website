<?php
include('header1.php')
?>
<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            IMITATION JEWELRY
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><span class="delimiter"></span><a href="shop-grid-imitation-jew.php">Shop</a><span class="delimiter"></span>Bracelets
                    </div>
                </div>
            </div>

            <?php
            include('conn.php');

            $sql = "SELECT * FROM `products`   WHERE `c_id`=16;";
            $result = mysqli_query($conn, $sql);
            ?>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
                                        <div class="products-list grid">
                                            <div class="row">
                                                <?php while ($row = mysqli_fetch_array($result)) { ?>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                        <div class="products-entry clearfix product-wapper">
                                                            <div class="products-thumb">
                                                                <div class="product-thumb-hover">
                                                                    <a href="shop-details.php?cosId=<?php echo $row[0]; ?>">
                                                                        <img width="600" height="600" src="../skyy/prodimages/<?php echo $row[5]; ?>" />
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="products-content">
                                                                <div class="contents text-center">

                                                                    <h3 class="product-title"> <a href="shop-details.php?cosId=<?php echo $row[0]; ?>"><?php echo $row[1]; ?></a></h3>
                                                                    <span class="price"><?php echo 'Price:  $' . $row[2]; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-button">
                                                                <div data-title="Add to cart">
                                                                    <form method="post">
                                                                        <input type="hidden" name="prodid" value="<?php echo $row['id']; ?>">
                                                                        <a href="atc.php?prodid=<?php echo $row['id']; ?>" class="button button-outline border-black"><i class="ri-shopping-bag-2-line" style="color:black;font-size: 22px;"></i>Add to Cart</a>
                                                                    </form>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include('footer.php')
            ?>