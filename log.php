<?php
session_start();
include('connection.php');

if (isset($_POST['submit']))
{	
$username=$_POST['email']; 
$password=$_POST['password']; 

if($username=="admin@gmail.com" && $password=="admin")
{
	$_SESSION['user']='admin';
	header("location:admin/dashboard/dashboard.php");
}
else{

	$sel="SELECT * FROM users WHERE email='$username' and password='$password'";
	$result = mysqli_query($con,$sel) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	
	if($rows==1)
	{	
		$_SESSION['uid']=$row['id'];
		$_SESSION['uname']=$row['name'];
		$_SESSION['user']='user';
		$_SESSION['unique_id'] = $row['id'];
		header("location:index1.php");
		
	}
	else{
		
		$sel="SELECT * FROM doctor WHERE email='$username' and password='$password'";
		$result = mysqli_query($con,$sel) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		echo $sel;
		if($rows==1)
		{	
		
			$_SESSION['did']=$row['id'];
			$_SESSION['dname']=$row['name'];
			$_SESSION['user']='doctor';
			$_SESSION['unique_id'] = $row['id'];
			header("location:index.php");
			
		}

		else{

			
		header("location:login.php?st=fail");
		}

		
		
		
	}
}

}
?>
 
 



