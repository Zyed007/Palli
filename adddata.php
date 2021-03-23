<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="palli";
$tbl_name="masjid";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$id=$_POST['meno'];
$user=$_POST['uname'];
$pno=$_POST['mno'];
    $q="SELECT MembershipNo from masjid where MembershipNo='$id'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret>=1)
    {
        echo '<script language="javascript">';
		echo 'alert("User Already exists");';
		echo 'window.location.href="admin.html";';
		echo '</script>';    
    }
    else
    {
        $query="INSERT INTO masjid (MembershipNo,Name,MobileNo) VALUES('$id','$user',$pno)";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo '<script language="javascript">';
		echo 'alert("You are sucessfull Added");';
		echo 'window.location.href="admin.php";';
		echo '</script>';
        
    }

mysqli_close($conn);

?>