<?php include("header.php");?>


<!-- Contact Us -->
<section id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-title">
							<h2> <span> Login</span></h2>
						</div>
					</div>
				</div>
				<?php
				error_reporting(0);
				if($_REQUEST['st']=='fail')
				{
					echo "<h3 style='color:red;'><center>Invalid Username or Password!</center></h3>";
				}
				?>

				<div class="row">
					<!-- Contact Form -->
					
					<div style="padding-left:400px;" class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp">
						<form class="form" method="post" action="log.php" >
						
							<div class="form-group">
								<i class="fa fa-envelope"></i>
								<input type="email" name="email" placeholder="Enter Your Email" required="required">
                            </div>
							
							<div class="form-group">
								<i class="fa fa-lock"></i>
								<input type="password" name="password" placeholder="Password" required="required">
                            </div>
							
							<div class="form-group">	
								<button type="submit" name="submit" class="button primary"><i class="fa fa-send"></i>Login</button>
                            </div>
						</form>
						
					</div>
					<!--/ Contact Form -->
					<!-- Google Map -->
					<!-- <div class="col-md-7 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="contact-map">
							<div class="map"></div>
						</div>
					</div> -->
					<!--/ End Google Map -->
				</div>
			</div>
		</section>
		<!--/ End Clients Us -->
<br><br><br><br><br>
		<?php include("footer.php");?>
