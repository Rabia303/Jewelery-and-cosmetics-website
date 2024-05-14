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
							Forgot Password
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="index.php">Home</a><span class="delimiter"></span>Forgot Password
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						<div class="page-forget-password">
							<form method="post" action="send.php" >
								<p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
								Email <input type="email" name="email" id="email"> <br>
								Subject <input type="text" name="subject" id="subject"> <br>
								Message <input type="text" name="message" id="message"> <br>
							
								<p class="form-row">
									<button type="submit" name="send">Reset password</button>
								</p>
							</form>
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