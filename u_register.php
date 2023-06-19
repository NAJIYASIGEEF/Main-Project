<?php include("header.php");?>


<!-- Contact Us -->
<section id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-title">
							<h2>User <span> Register</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Contact Form -->
					
					<div style="padding-left:400px;" class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp">
						<form class="form" method="post" >
							<div class="form-group">
								<i class="fa fa-user"></i>
								<input type="text" name="name" placeholder="Full Name" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-envelope"></i>
								<input type="email" name="email" placeholder="Enter Your Email" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-phone"></i>
								<input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{10}" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-home"></i>
								<input type="text" name="place" placeholder="Place" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-lock"></i>
								<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            </div>
							
							<div class="form-group">	
								<button type="submit" name="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
                            </div>
						</form>
						<?php
				  include("connection.php");
				  if(isset($_POST['submit']))
				  {
					  $name=$_POST['name'];
					  $email=$_POST['email'];
					  $place=$_POST['place'];
					  $phone=$_POST['phone'];
					  $password=$_POST['psw'];
					  
					  $ins="insert into users(name,email,place,phone,password) values('$name','$email','$place','$phone','$password')";
					  $res=mysqli_query($con,$ins);
					  echo '<script>alert("Succesfully Registered!")
						  window.location="index.php";
						  </script>';
				  }
				  ?>
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

		<?php include("footer.php");?>
