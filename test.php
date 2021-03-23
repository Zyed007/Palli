<?php

$host="localhost";
$username="root";
$password="";
$db_name="palli";
$tbl_name="masjid";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$select_db=mysqli_select_db($conn,$db_name) or die (mysqli_error($conn));
session_start();
$_SESSION["id"]=$_POST['meno'];
$ab1=$_POST['meno'];
$res1="select * from $tbl_name where MembershipNo=$ab1";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result1);
if($cn==false)
    {
        header("Location:dsn1.php");
    }
    else{
        session_start();
$_SESSION["id"]=$_POST['meno'];
header("Location:prupdate.php");
    }
?>