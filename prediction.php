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
							<h2>Disease<span> Prediction</span></h2>
						</div>
					</div>
				</div>
				<div class="row fadeInUp"> 
					<!-- About Main -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="about-main">
							<form method="POST" action='output.php'>
								<label>Symptom 1</label>
								<select name='sym1' class="form-control" required>
									<option value=''>--select--</option>
									<?php
									$sel=mysqli_query($con,"SELECT * FROM `symptoms`");
									while($row=mysqli_fetch_array($sel))
									{
									?>
									<option value='<?php echo $row['Symptom_1'];?>'><?php echo $row['Symptom_1'];?></option>
									<?php
									}
									?>
								</select>
								<label>Symptom 2</label>
								<select name='sym2' class="form-control" required>
									<option value=''>--select--</option>
									<?php
									$sel=mysqli_query($con,"SELECT * FROM `symptoms`");
									while($row=mysqli_fetch_array($sel))
									{
									?>
									<option value='<?php echo $row['Symptom_2'];?>'><?php echo $row['Symptom_2'];?></option>
									<?php
									}
									?>
								</select>
							
						</div>
					</div>
					<!--/ End About Main -->
					<!-- About Slide -->
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="about-video">
							<label>Symptom 3</label>
							<select name='sym3' class="form-control" required>
								<option value=''>--select--</option>
								<?php
								$sel=mysqli_query($con,"SELECT * FROM `symptoms`");
								while($row=mysqli_fetch_array($sel))
								{
								?>
								<option value='<?php echo $row['Symptom_3'];?>'><?php echo $row['Symptom_3'];?></option>
								<?php
								}
								?>
							</select>
							<label>Symptom 4</label>
							<select name='sym4' class="form-control" required>
								<option value=''>--select--</option>
								<?php
								$sel=mysqli_query($con,"SELECT * FROM `symptoms`");
								while($row=mysqli_fetch_array($sel))
								{
								?>
								<option value='<?php echo $row['Symptom_4'];?>'><?php echo $row['Symptom_4'];?></option>
								<?php
								}
								?>
							</select>
								
						</div>
					</div>
					<!--/ End About Slide -->
				</div>
				<br>
				<input type="submit" class="btn btn-primary" name="Submit">
								
							</form>	
			</div>
		</section>
		<!--/ End About -->
		
		
		
		
		
		
		
		
		<?php include("footer.php");?>