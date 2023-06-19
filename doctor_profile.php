<?php
include("header.php");
include("connection.php");
$select="select * from doctor where id='$_SESSION[did]'";
//echo $select;
$res=mysqli_query($con,$select);
$row=mysqli_fetch_array($res);
?>


		<section id="blog" class="section page">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-title">
							<h2>Our <span>Doctors</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="entry-blog">
							<!-- Single Blog -->
							<div class="single-blog">
								<div class="blog-head">
									<center><img src="admin/doctor/uploads/<?php echo $row['photo'];?>" alt="" class="" style='width: 300px;  height: 300px;'></center>
								</div>
								<div class="blog-info">
									<h4>DR. <?php echo strtoupper($row['name']);?></h4>
									<div class="meta">
										<span> <b>Specialization: </b> <?php echo $row['specialization'];?></span>
									</div>
									<p><b>Phone: </b><?php echo $row['phone'];?></p>
									<p><b>Email: </b><?php echo $row['email'];?></p>
									<p><b>Experience: </b><?php echo $row['experience'];?> years</p>
									<p><b>Place: </b><?php echo $row['place'];?> </p><br/>
								</div>
								<!-- Blog Share -->
								<div class="blog-share">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										
									</ul>
								</div>
								<!--/ End Blog Share -->
								<!-- Blog Prev Next -->
								<!--/ End Blog Prev Next -->
								<!-- Blog Comments -->
							</div>
							<!--/ End Single Blog -->
						</div>
					</div>

				<div class="map"></div>
				<div id="particles-js"></div>
			</div>
		</section>
		<!-- End Blog -->	

		<?php

include("footer.php");
?>

