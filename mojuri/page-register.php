<?php
session_start();
if (isset($_POST['sub'])) {
	include('conn.php');
	$name = $_POST['uname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql = "INSERT INTO `login`(`name`, `email`, `pass`) VALUES ('$name','$email','$pass')";
	$result =  mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>
alert('Registered Successfully')
</script>";
	}
}


?>
<?php
include('header3.php')
?>

		<div id="site-main" class="site-main">
			<div id="main-content" class="main-content">
				<div id="primary" class="content-area">
					<div id="title" class="page-title">
						<div class="section-container">
							<div class="content-title-heading">
								<h1 class="text-title-heading">
									Login / Register
								</h1>
							</div>
							<div class="breadcrumbs">
								<a href="index-2.html">Home</a><span class="delimiter"></span>Login / Register
							</div>
						</div>
					</div>

					<div id="content" class="site-content" role="main">
						<div class="section-padding">
							<div class="section-container p-l-r">
								<div class="page-login-register">
									<div class="row">

										<div class=" col-md-12 col-sm-12 sm-m-b-50">
											<div class="box-form-login">
												<h2 class="register">Register</h2>
												<div class="box-content">
													<div class="form-register">
														<form method="post" class="register">
															<div class="name">
																<label>Username <span class="required">*</span></label>
																<input type="text" class="input-text" name="uname" value="">
															</div>
															<div class="email">
																<label>Email address <span class="required">*</span></label>
																<input type="email" class="input-text" name="email" value="">
															</div>
															<div class="password">
																<label>Password <span class="required">*</span></label>
																<input type="password" class="input-text" name="password">
															</div>
															<div class="button-register">
																<input type="submit" class="button" name="sub" value="Register">
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- #content -->
				</div><!-- #primary -->
			</div><!-- #main-content -->
		</div>
<?php
include('footer.php')
?>