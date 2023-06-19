<?php 
include("header.php");
include("connection.php");
?>
		

		
		<!-- Start About -->
		<section id="about-us" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-title">
							<h2>View<span> Result</span></h2>
						</div>
					</div>
				</div>
				<div class="row fadeInUp"> 
					<!-- About Main -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="about-main">
							<table class='table'>
								<tr>
									<th>#</th>
									<th>Result</th>
									<th>Date</th>
								</tr>
								<?php
								$sel=mysqli_query($con,"SELECT * FROM `result` where user_id='$_SESSION[uid]'");
								//echo "SELECT * FROM `result` where user_id='$_SESSION[uid]'";
								$i=1;
								while($row=mysqli_fetch_array($sel))
								{
								?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['result']; ?></td>
									<td><?php echo $row['date']; ?></td>
								</tr>
								<?php
								$i++;
								}
								?>
								
							</table>
							
						</div>
					</div>
					<!--/ End About Main -->
					
				</div>
			</div>
		</section>
		<!--/ End About -->
		
		
		
		
		
		
		
		
		<?php include("footer.php");?>
	