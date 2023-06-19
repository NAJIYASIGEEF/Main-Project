<?php include("header.php");?>


<!-- Contact Us -->
<section id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-title">
							<h2>Doctor <span> Register</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Contact Form -->
					
					<div style="padding-left:400px;" class="col-md-8 col-sm-12 col-xs-12 wow fadeInUp">
						<form class="form" method="post" >
							<div class="form-group">
								<i class="fa fa-user-md"></i>
								<input type="text" name="name" placeholder="Full Name" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-envelope"></i>
								<input type="email" name="email" placeholder="Enter Your Email" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-phone"></i>
								<input type="tel" name="phone" placeholder="Phone" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-home"></i>
								<input type="text" name="place" placeholder="Place" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-stethoscope"></i>
								<input type="text" name="specialization" placeholder="Specialization" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-calendar"></i>
								<input type="number" name="experience" placeholder="Experience in Year" required="required">
                            </div>
							<div class="form-group">
								<i class="fa fa-lock"></i>
								<input type="password" name="password" placeholder="Password" required="required">
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
					  $specialization=$_POST['specialization'];
					  $experience=$_POST['experience'];
					  $password=$_POST['password'];
					  
					  $ins="insert into doctor(name,email,place,phone,specialization,experience,password) values('$name','$email','$place','$phone','$specialization','$experience','$password')";
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
