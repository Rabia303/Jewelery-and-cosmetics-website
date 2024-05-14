<?php
include('header3.php');
include('conn.php');
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    $sqlss = "SELECT * FROM `add_to_cart`,`products`,`categories` WHERE add_to_cart.p_id = products.id AND add_to_cart.c_id = categories.id";
    $resultss = mysqli_query($conn, $sqlss);

    $row = mysqli_fetch_array($resultss);
} else {
    echo '<p style="color: red;">You are not logged in. Please log in to view your cart.</p>';
    $resultss = null;
}
if (isset($_POST['sub'])) {
    // Initialize total price
    $price = $_POST['price'];
    $q = $_POST['q'];


    $sql = "INSERT INTO `checkout`(`quantity`, `total amount`) 
VALUES ('$q', '$price')";

    $result = mysqli_query($conn, $sql);
}
?>
<script src="xx.js"></script>

<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            Shopping Cart
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><span class="delimiter"></span><a href="shop-grid-cosmetics.php">Shop</a><span class="delimiter"></span>Shopping Cart
                    </div>
                </div>
            </div>


            <div id="content" class="site-content" role="main">

                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="shop-cart">
                            <div class="row">
                                <div class="col-xl-8 col-lg-12 col-md-12 col-12">

                                    <form class="cart-form" method="post">
                                        <div class="table-responsive">
                                            <table class="cart-items table" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal">Subtotal</th>
                                                        <th class="product-remove">Delete</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if ($resultss) {
                                                        while ($rowsss = mysqli_fetch_array($resultss)) {
                                                            // / Calculate subtotal for each item
                                                            // $productSubtotal = $rowsss['p_price'];
                                                            // $totalPrice += $productSubtotal;

                                                    ?>
                                                            <tr class="cart-item">
                                                                <td class="product-thumbnail">
                                                                    <a href="shop-details.php?prodid=<?php echo $rowsss['id']; ?>">
                                                                        <img width="600" height="600" src="../skyy/prodimages/<?php echo $rowsss['p_img']; ?>" />
                                                                    </a>
                                                                    <div class="product-name">
                                                                        <a href="shop-details.php?prodid=<?php echo $rowsss['id']; ?>"><?php echo $rowsss['p_name']; ?></a>
                                                                    </div>
                                                                </td>
                                                                <td class="product-price">
                                                                    <span class="price">$<?php echo $rowsss['p_price']; ?></span>
                                                                </td>
                                                                <td class="product-quantity">
                                                                    <div class="quantity">
                                                                        <button type="button" class="minus">-</button>
                                                                        <input type="number" class="qty" step="1" min="0" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">

                                                                        <button type="button" class="plus">+</button>
                                                                    </div>
                                                                </td>
                                                                <td class="product-subtotal">
                                                                    <span>$<?php echo $productSubtotal; ?></span>
                                                                </td>
                                                                <td>
                                                                    <a href="atcd.php?atc_id=<?php echo $rowsss['atc_id']; ?>"><i class="fa fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }

                                                        ?>
                                                        <form method="post">
                                                            <tr>
                                                                <td class="product-subtotal">
                                                                    <div class="order-total">
                                                                        <div class="title">Total amount</div>
                                                                        <div><span id="totalPrice" name="price">0</span></div>
                                                                        <input type="hidden" id="totalPrice" name="price" value="0">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>



                                                            <tr>
                                                                <td class="product-subtotal">
                                                                    <div class="order-total">
                                                                        <div class="title">Total quantity</div>
                                                                        <div><span id="totalQuantityDisplay" name="q">0</span></div>

                                                                        <input type="hidden" id="totalQuantityDisplay" name="q" value="0">
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <button type="submit" name="sub"></button>
                                                    </form>
                                                        <?php
                                                    }
                                                        ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- CART TOTALS -->

                                        <div style="display: flex; justify-content: space-between; align-items: center;">

                                            <div class="proceed-to-checkout">
                                                <button type="submit" name="sub" style="background-color: #FF5733; color: #fff; font-weight: bold; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                                                    SUBMIT
                                                </button>
                                            </div>

                                            <div class="proceed-to-checkout">
                                                <a href="index.php" style="background-color: lightskyblue; color: #fff; font-weight: bolder; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                                                    CONTINUE SHOPPING
                                                </a>
                                            </div>

                                            <div class="proceed-to-checkout">
                                                <a href="shop-checkout.php" style="background-color: lightgreen; color: #fff; font-weight: bolder; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                                                    PROCEED TO CHECKOUT
                                                </a>
                                            </div>

                                        </div>
                                        <br>
                                        <div>
                                            <p style="color: lightseagreen;font-weight: bolder;font-size: larger;">Please press submit first then proceed to checkout</p>
                                        </div>

                                    </form>
                                </div>

                            </div><!-- #main-content -->
                        </div>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            // Initialize total quantity
                            var totalQuantity = 0;

                            $(document).ready(function() {

                                // Function to update subtotal for a specific input field
                                function updateSubtotal(inputField) {
                                    var quantity = parseInt(inputField.val());
                                    var price = parseFloat(inputField.closest('tr').find('.price').text().replace('$', ''));
                                    var subtotal = quantity * price;
                                    inputField.closest('tr').find('.product-subtotal span').text('$' + subtotal.toFixed(2)); // Display subtotal with 2 decimal places

                                    // Update the total quantity
                                    totalQuantity += quantity;

                                    return subtotal;
                                }
                                // Inside your JavaScript code
                                var totalQuantityDisplay = parseInt($('#totalQuantityDisplay').text());

                                // Assign the value to the input field
                                $('input[name="totalQuantity"]').val(totalQuantityDisplay);
                                // Inside your JavaScript code
                                var totalPriceDisplay = parseFloat($('#totalPrice').text().replace('$', '')); // Remove '$' and parse as a float


                                // Function to update the total price and total quantity
                                // Function to update the total quantity
                                function updateTotal() {
                                    totalQuantity = 0; // Reset the total quantity to 0

                                    var total = 0;
                                    $('.product-quantity input.qty').each(function() {
                                        total += updateSubtotal($(this)); // Update subtotal and add to total
                                    });

                                    $('#totalPrice').text('$' + total.toFixed(2)); // Display total price with 2 decimal places
                                    $('#totalQuantityDisplay').text(totalQuantity); // Display total quantity
                                }

                                // Plus button click event
                                $('.plus').click(function() {
                                    var inputField = $(this).siblings('.qty');
                                    var currentQuantity = parseInt(inputField.val());
                                    inputField.val(currentQuantity + 1);
                                    var subtotal = updateSubtotal(inputField);
                                    updateTotal();
                                });

                                // Minus button click event
                                $('.minus').click(function() {
                                    var inputField = $(this).siblings('.qty');
                                    var currentQuantity = parseInt(inputField.val());
                                    if (currentQuantity > 1) {
                                        inputField.val(currentQuantity - 1);
                                        var subtotal = updateSubtotal(inputField);
                                        updateTotal();
                                    }
                                });

                                // Initial calculation of total
                                updateTotal();
                            });
                        </script>