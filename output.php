<?php include("header.php");?>
		

		
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
							<?php
			   if(isset($_POST['Submit']))
			   {
				    
					$s1=$_POST['sym1'];
					$s2=$_POST['sym2'];
					$s3=$_POST['sym3'];
					$s4=$_POST['sym4'];
					
					
					$head="Symptom_1,Symptom_2,Symptom_3,Symptom_4";
					$data="$s1,$s2,$s3,$s4";
					//echo $data;
					
				$myfile="test.csv";
				$fh=fopen($myfile,'w') or die('canot open file');
				$str="$head\n$data";
				fwrite($fh,$str);
				fclose($fh);

				set_time_limit(0);
				include('connection.php');

				echo "<br>";
				$python = `python test.py`;
				//echo "<pre>".$python."</pre>";
				
				//$python1 = "C:\\Users\\USER\\anaconda3\\python.exe";
				//$file = "C:\\xampp\\htdocs\\Medical\\test.py";
				//$python=exec($python1 . " " . $file);
				
				echo "<div class='col-lg-12 col-md-12 well' style='background-color:#aad6ff' >
				      <center><h1>OUTPUT</h1><hr>
					  <pre><h3>"."Chances of ".$python."</h3></pre></center>";
					  
						date_default_timezone_set('Asia/Kolkata');
						$date = date( 'Y-m-d h:i:s');
			mysqli_query($con,"insert into result(user_id,result,date) Values ('$_SESSION[uid]','$python','$date')");
				
			//echo"insert into result(user_id,result,date) Values ('$_POST[uid]','$python','$date')";				
				
				   $c=trim($python);
				   $sel=mysqli_query($con,"SELECT * FROM `disease` WHERE `disease`='$c'");
				   $row=mysqli_fetch_array($sel);
				   
				   echo "<h4>Description</h4>";
				   echo $row['description'];
				   echo "<br><br>";
				   echo "<h4>Precaution</h4>";
				   echo $row['precaution'];
				   echo "</div>";
				  
					echo "<hr>";
					
				?>
				
				<section id="blog" class="section page">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<!-- Blog Sidebar -->
									<div class="blog-sidebar">
										<!-- Single Sidebar -->
										<div class="single-sidebar latest">
											<h2>Recommended <span>Doctors</span></h2>
											<?php
											$query=mysqli_query($con,"SELECT disease.disease, disease.doctors,disease.description, disease.precaution, doctor.* FROM disease JOIN doctor ON disease.doctors = doctor.specialization where disease='$c'");
											while($cc=mysqli_fetch_array($query))
											{
												$q=mysqli_query($con,"SELECT * FROM `specialization` WHERE `id`='$cc[specialization]'");
												$r=mysqli_fetch_array($q);
											?>
					
											<!-- Single Post -->
											<div class="single-post">
												<div class="post-img">
													<img src="admin/doctor/uploads/<?php echo $cc['photo'];?>" alt=""/>
												</div>
												<div class="post-info">
													<h4><a href="#"><?php echo $cc['name']; ?></a></h4> 
													<p><?php echo $r['specialization']; ?></p>
													<a href="doctor.php?id=<?php echo $cc['id'] ?>" class='btn btn-success' style='margin-left: 175px; margin-top: -63px; color: white;'>Chat</a>	
												</div>
											</div>
											<!-- End Single Post -->
											<?php
											}
											?>
											
											
										</div>
										<!--/ End Single Sidebar -->
									</div>
									<!--/ End Blog Sidebar -->
								</div>
							</div>
							<div class="map"></div>
							<div id="particles-js"></div>
						</div>
					</section>
		

				<?php
			}	   
			   
			?>
				</div>
		</section>
		<!--/ End About -->
		
		
		
		
		
		
		
		
		<?php include("footer.php");?>
	





