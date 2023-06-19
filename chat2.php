<?php
include("header.php");
include("connection.php");
?>


		<section id="blog" class="section page">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-title">
							<h2> <span>Chats</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="our_fishs">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  
               </div>
            </div>
			
			<?php
				session_start();
				include('db/connectionI.php');
				if(isset($_POST['ccc']))
				{
					$date=date('Y-m-d H:m:s');
					mysqli_query($con,"UPDATE chat  SET reply='$_POST[replay]',reply_date='$date' WHERE id='$_POST[cid]'");
					header("location:consult1.php");
				}
			?>
	
		<section class="section">
			<div class="container">
				<div class="row justify-content-between">  
					<div class="col-md-12 mt-4 mt-md-0">
					<?php
						$sel="SELECT * FROM chat where doc_id='$_SESSION[did]'   order by id desc ";
						$result = mysqli_query($con,$sel);
						$rows = mysqli_num_rows($result);
						while($row=mysqli_fetch_array($result))
						{
							echo "<div class='col-md-12' style='background-color:#cccccc;'><br><br>";
							$sel2="SELECT * FROM users WHERE id='$row[userid]'";
							$result2 = mysqli_query($con,$sel2);
							$rows2 = mysqli_fetch_array($result2);
							
							if($row['reply']=="")
							{
								echo "<div class='col-md-12' style='background-color:#9d9494; text-align:right'><b>$row[message]</b><br>User : $rows2[name] &nbsp; &nbsp; Date: $row[date_time]</div><br>";
					?>
								<form action="" method="post">
								Enter Reply
									<textarea class='form-control' name='replay'></textarea>
									<input type='hidden' name='cid' value='<?php echo $row['id']; ?>' />
									<br>
									<input type='submit' class='btn btn-primary' name='ccc' value='send'>
									<br>
									<br>
								</form>  
					<?php   
						echo"</div><br><br>";
							}
							else{

								echo "<div class='col-md-12' style='background-color:#9d9494; text-align:right'><b>$row[message]</b><br>User : $rows2[name] &nbsp; &nbsp; Date: $row[date_time]</div><br>";

								echo "<div class='col-md-12' style='background-color:#9d9494; text-align:left'>Reply<br><b>$row[reply]</b><br> Date: $row[reply_date]</div><br><br><br>";
								
								echo"</div><br><br>";

							}
						}
					?>
					</div>
				</div>
			</div>
		</section>
			

		</section>
		<!-- End Blog -->	

		<?php

include("footer.php");
?>

