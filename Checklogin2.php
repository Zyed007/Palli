<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="palli";
$tbl_name="admin";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
if(isset($_POST['uname']) && isset($_POST['psw']))
{
	$user=$_POST['uname'];
	$password=$_POST['psw'];
	$ab="SELECT * FROM admin WHERE Username='$user' and password='$password'";
	$result=mysqli_query($conn,$ab) or die(mysqli_error($conn));
	$cnt=mysqli_num_rows($result);
	if($cnt == true)
	{ 
		$_SESSION['uname']=$user;
		header('Location:admin1.php');
		}
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Wrong Credentials Entered");';
		echo 'window.location.href="page1.html";';
		echo '</script>';
		}
		}
		ob_end_flush(); 
		?> 