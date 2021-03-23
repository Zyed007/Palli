<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="palli";
$tbl_name="masjid";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
if(isset($_POST['meno']) && isset($_POST['mno']))
{
	$user=$_POST['meno'];
	$mobile=$_POST['mno'];
	$ab="SELECT * FROM masjid WHERE MembershipNo='$user' and MobileNo='$mobile'";
	$result=mysqli_query($conn,$ab) or die(mysqli_error($conn));
	$cnt=mysqli_num_rows($result);
	if($cnt == true)
	{ 
		$_SESSION['meno']=$user;
		header('Location:demo.php');
		}
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Wrong Credentials Entered");';
		echo 'window.location.href="page2.html";';
		echo '</script>';
		}
		}
		ob_end_flush(); 
		?> 