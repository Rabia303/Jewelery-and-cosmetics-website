<?php
include('header1.php');
if (isset($_POST['order'])) {
	include('conn.php');
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$country = $_POST['country'];
	$street = $_POST['street'];
	$wphone = $_POST['wphone'];
	$cphone = $_POST['cphone'];
	$cat = $_POST['cat'];
	$email = $_POST['email'];
	$remarks = $_POST['remarks'];

	// Retrieve the user's ID from the session
	$user_id = $_SESSION['id'];

	$sql = "INSERT INTO `billing`( `user_id`, `Name`, `dob`, `Country`, `StreetAddress`, `WorkPhoneNo`,
     `CellNo`, `Category`, `email`, `remarks`) VALUES ('$user_id','$name','$dob',
     '$country','$street','$wphone','$cphone','$cat','$email','$remarks')";

	if (mysqli_query($conn, $sql)) {
		// Order successfully placed, now redirect to the success page
		echo '<script>
           
            window.location.href = "success.php"; 
        </script>';
		exit; // Make sure to exit to prevent further code execution
	} else {
		// Handle errors here, if any
		echo 'Order placement failed.';
	}

}
?>


<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Checkout
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="index.php">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Checkout
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						<div class="shop-checkout">
							<form name="checkout" method="post" class="checkout" autocomplete="off">
								<div class="row">
									<div class="col-xl-8 col-lg-7 col-md-12 col-12">
										<div class="customer-details">
											<div class="billing-fields">
												<h3>Billing Details</h3>
												<div class="billing-fields-wrapper">
													<p class="form-row form-row-first validate-required">
														<label>Name<span class="required" title="required">*</span></label>
														<span class="input-wrapper"><input type="text" class="input-text" name="name" value=""></span>
													</p>

													<p class="form-row form-row-wide">
														<label>Date of Birth <span class="optional">(optional)</span></label>
														<span class="input-wrapper"><input type="text" class="input-text" name="dob" value=""></span>
													</p>
													<p class="form-row form-row-wide validate-required">
														<label>Country / Region <span class="required" title="required">*</span></label>
														<span class="input-wrapper">
															<input type="text" class="input-text" name="country" value="">
														</span>
													</p>
													<p class="form-row address-field validate-required form-row-wide">
														<label>Street address <span class="required" title="required">*</span></label>
														<span class="input-wrapper">
															<input type="text" class="input-text" name="street" placeholder="House number and street name" value="">
														</span>
													</p>


													<!-- <p class="form-row address-field validate-required validate-postcode form-row-wide">
														<label>Postcode / ZIP <span class="required" title="required">*</span></label>
														<span class="input-wrapper">
															<input type="text" class="input-text" name="billing_postcode" value="">
														</span>
													</p> -->
													<p class="form-row form-row-wide validate-required validate-phone">
														<label>Work Phone no<span class="required" title="required">*</span></label>
														<span class="input-wrapper">
															<input type="tel" class="input-text" name="wphone" value="">
														</span>
													</p>
													<p class="form-row form-row-wide validate-required validate-phone">
														<label>Cell No.<span class="required" title="required">*</span></label>
														<span class="input-wrapper">
															<input type="tel" class="input-text" name="cphone" value="">
														</span>
													</p>

													<p class="form-row address-field validate-required form-row-wide">
														<label>Category<span class="required" title="required"> (Jewelry/Cosmetics)</span></label>
														<span class="input-wrapper">
															<input type="text" class="input-text" name="cat" value="">
														</span>
													</p>

													<p class="form-row form-row-wide validate-required validate-email">
														<label>Email<span class="required" title="required">*</span></label>
														<span class="input-wrapper">
															<input type="text" class="input-text" name="email" value="" autocomplete="off">
														</span>
													</p>

												</div>
											</div>

										</div>

										<div class="additional-fields">
											<p class="form-row notes">
												<label>Remarks(other additional informational)<span class="optional">(optional)</span></label>
												<span class="input-wrapper">
													<textarea name="remarks" class="input-text" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
												</span>
											</p>
										</div>
									</div>
									<div class="col-xl-4 col-lg-5 col-md-12 col-12">
										<div class="checkout-review-order">

											<div id="payment" class="checkout-payment">
												<ul class="payment-methods methods custom-radio">


													<li class="payment-method">
														<input type="radio" class="input-radio" name="payment_method" value="cod">
														<label>Cash on delivery</label>
														<div class="payment-box">
															<p>Pay with cash upon delivery.</p>
														</div>
													</li>

												</ul>
												<div class="form-row place-order">
													<div class="terms-and-conditions-wrapper">
														<div class="privacy-policy-text"></div>
													</div>
													<button type="submit" class="button alt" id="place-order" name="order" value="Place order">Place order</button>

												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>
<!-- Add this script section at the bottom of your "success.php" file -->


<?php
include('footer.php')
?>