<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="palli";
$tbl_name="masjid";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$user = $_SESSION['meno'];
$select_db=mysqli_select_db($conn,$db_name)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name where MembershipNo='$user'";
$result=mysqli_query($conn,$sql)or die(mysql_error($conn));
$count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <style>
.card
 {
  box-shadow: 0 4p 8px 0 rgba(0, 0, 0, 0.2);
  max-width :300px;
  text-align:center;
  font-family:arial;
  justify-content:space-evenly;
  display:inline-block;
}

.title {
  color: grey;
  font-size: 18px;
}
table, tr, td {
            border: solid black;
            width: 33%;
            text-align: center;
            border-collapse:collapse;
            background-color: lightblue;
        }

        table {
            margin: auto;
        }

</style>
</head>
<body>

<h2 style="text-align:center">WELCOME BACK <?php echo $user;?></h2>
<div align="center">
<div class="card">
  <h1><?php echo $user; ?> </h1>
  <?php if($count>0)
   {
   while($row=mysqli_fetch_assoc($result))
   {
    ?>
    <p class="title"> Your Membership No: <?php echo $row['MembershipNo'];?></p>
    <p class="title"> Name: <?php echo $row['Name'];?></p>
    <p class="title"> Mobile No: <?php echo $row['MobileNo'];?></p>
    <a href="page2.html">LOGOUT</a>
</div>
<table style="width:50%">
  <h2>Monthly Deposit</h2>
  <tr>
  </tr>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <td><?php echo $row['Jan'];?></td>
  </tr>
  <tr>
    <td>Febuary</td>
    <td><?php echo $row['Feb'];?></td>
  </tr>
  <tr>
    <td>March</td>
    <td><?php echo $row['Mar'];?></td>
  </tr>
  <tr>
    <td>April</td>
    <td><?php echo $row['Apr'];?></td>
  </tr>
  <tr>
    <td>May</td>
    <td><?php echo $row['May'];?></td>
  </tr>
  <tr>
    <td>June</td>
    <td><?php echo $row['Jun'];?></td>
  </tr>
  <tr>
    <td>July</td>
    <td><?php echo $row['Jul'];?></td>
  </tr>
  <tr>
    <td>August</td>
    <td><?php echo $row['Aug'];?></td>
  </tr>
  <tr>
    <td>September</td>
    <td><?php echo $row['Sep'];?></td>
  </tr>
  <tr>
    <td>October</td>
    <td><?php echo $row['Oct'];?></td>
  </tr>
  <tr>
    <td>November</td>
    <td><?php echo $row['Nov'];?></td>
  </tr>
  <tr>
    <td>December</td>
    <td><?php echo $row['Dece'];?></td>
  </tr>
</table>

</body>
</html>
   </div>
</body>
</html>
<?php
    }
	}
	else
	{
	 echo "0 result";
    }
     mysqli_close($conn);
     ?>
     