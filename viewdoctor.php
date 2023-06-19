<?php
include("header.php");

?>


		
		<!-- Start Team -->
		<section id="team" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-title">
							<h2>Our <span>Doctors</span></h2>
						</div>
					</div>
				</div>
					<?php
include("connection.php");
$select='select * from doctor';
$res=mysqli_query($con,$select);
while($row=mysqli_fetch_array($res))
{
	$sel=mysqli_query($con,"SELECT * FROM `specialization` WHERE `id`='$row[specialization]'");
	$cc=mysqli_fetch_array($sel);
	?>
				<div class="row">
					<!-- Team Single -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">		
						<div class="single-team">
							<div class="team-head">
								<img src="admin/doctor/uploads/<?php echo $row['photo'];?>">
								<ul class="team-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="team-info">
								<a href="doctor.php?id=<?php echo $row['id'];?>">
								<div class="name">
									<h4>DR. <?php echo $row['name'];?></h4>
								</div>
								</a>
								<p><?php echo $cc['specialization'];?></p>
							</div>
						</div>
					</div>
					<?php
					}
					?>
                </div>
			</div>
		</section>	 
		<!--/ End Team -->
		

		<?php

include("footer.php");
?>
