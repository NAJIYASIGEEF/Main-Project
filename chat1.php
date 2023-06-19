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
			#include('db/connectionI.php');
			if(isset($_POST['ccc']))
			{
				$date=date('Y-m-d H:m:s');
				mysqli_query($con,"INSERT INTO chat(message,date_time,userid,doc_id) VALUES('$_POST[msgd]','$date','$_SESSION[uid]','$_POST[did]')");
				header("location:chat.php");
			}
    
    
    ?>
	
    <section class="section">
        <div class="container">
            <div class="row justify-content-between">               
                <div class="col-md-6 col-lg-5 align-self-center">
                    <h6 class="title">Message Now</h6>
                    <form action="" method="post">
				Enter Message
				<textarea class='form-control' name='msgd' required></textarea>
				<input class='form-control' name='did' value='<?php echo $_REQUEST['id']; ?>' type='hidden'>
				<br>
				<input type='submit' class='btn btn-primary' name='ccc' value='send'>
				</form>                 
                </div>
                <div class="col-md-5 mt-4 mt-md-0">
                <?php
               
                    $sel="SELECT * FROM chat where userid='$_SESSION[uid]' and doc_id='$_REQUEST[id]' order by id desc";
                    $result = mysqli_query($con,$sel);
                    $rows = mysqli_num_rows($result);
                    while($row=mysqli_fetch_array($result))
                    {
                        echo "<div class='col-md-12' style='background-color:#8b9595; text-align:right'><b>$row[message]</b><br> Date: $row[date_time]</div><br>";
                        echo "<div class='col-md-12' style='background-color:#8b9595; text-align:left'>Replay<br><b>$row[reply]</b><br> Date: $row[reply_date]</div><br><br><br>";
                    }
			
			    ?>
                </div>
            </div>
        </div>
    </section>
			
         </div>
      </div>
				
				</div>
		</section>
		<!-- End Blog -->	

		<?php

include("footer.php");
?>

