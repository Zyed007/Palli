<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="palli";
$tbl_name="masjid";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$ab1=$_SESSION["id"];
$res1="select * from $tbl_name where MembershipNo=$ab1";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result1);
if($cn==false)
    {
        header("Location:dsn1.php");
    }
else
    {
        while($row=mysqli_fetch_array($result1))
        {
            $mem=$row['MembershipNo'];
            $jan=$row['Jan'];
            $feb=$row['Feb'];
            $mar=$row['Mar'];
            $apr=$row['Apr'];
            $may=$row['May'];
            $jun=$row['Jun'];
            $jul=$row['Jul'];
            $aug=$row['Aug'];
            $sep=$row['Sep'];
            $oct=$row['Oct'];
            $nov=$row['Nov'];
            $dec=$row['Dece'];
        }
    }   
?>

<?php
$a=$_SESSION["id"];
if(isset($_POST['update']))
    {
        $jan=$_POST['Jan'];
        $feb=$_POST['Feb'];
        $mar=$_POST['Mar'];
        $apr=$_POST['Apr'];
        $may=$_POST['May'];
        $jun=$_POST['Jun'];
        $jul=$_POST['Jul'];
        $aug=$_POST['Aug'];
        $sep=$_POST['Sep'];
        $oct=$_POST['Oct'];
        $nov=$_POST['Nov'];
        $dec=$_POST['Dece'];
        $res2="UPDATE $tbl_name SET `Jan`=$jan,`Feb`=$feb,`Mar`=$mar,`Apr`=$apr,`May`=$may,`Jun`=$jun,`Jul`=$jul,`Aug`=$aug,`Sep`=$sep,`Oct`=$oct,`Nov`=$nov,`Dece`=$dec WHERE MembershipNo=$a";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        header("Location:disp1.php");
    }
?>


<html>
    <head>
        <title>Update data</title>
        <link rel="stylesheet" type="text/css" href="css/reg.css">
    </head>
    <body>
    <div class="container">
    <h1 ALIGN="center">Update</h1>
    <p ALIGN="center">Update The  Details.</p>
    
        <br/><br/>
        <form name="" method="post" action="">
        <div class="m">    
                    <p ALIGN="center" name="mem">Membership No:<?php echo $_SESSION["id"];?></p>
                    <label for="Jan" ><b>January</b></label>
                    <input type="text" name="Jan" value="<?php echo $jan;?>" >
                    <br> 
                    
                    <label for="Feb"><b>February</b></label>
                    <input type="text" name="Feb" value="<?php echo $feb;?>" >
                    <br>                
                    <label for="Mar"><b>March</b></label>
                    <input type="text" name="Mar" value="<?php echo $mar;?>" >
                    <br> 
                    <label for="Apr"><b>April</b></label>
                    <input type="text" name="Apr" value="<?php echo $apr;?>" >
                    <br> 
                    <label for="May"><b>May</b></label>
                    <input type="text" name="May" value="<?php echo $may;?>" >
                    <br> 
                    <label for="Jun"><b>June</b></label>
                    <input type="text" name="Jun" value="<?php echo $jun;?>" >
                    <br> 
                    <label for="Jul"><b>July</b></label>
                    <input type="text" name="Jul" value="<?php echo $jul;?>" >
                    <br> 
                    <label for="Aug"><b>August</b></label>
                    <input type="text" name="Aug" value="<?php echo $aug;?>" >
                    <br> 
                    <label for="Sep"><b>September</b></label>
                    <input type="text" name="Sep" value="<?php echo $sep;?>" >
                    <br> 
                    <label for="Oct"><b>October</b></label>
                    <input type="text" name="Oct" value="<?php echo $oct;?>" >
                    <br> 
                    <label for="Nov"><b>November</b></label>
                    <input type="text" name="Nov" value="<?php echo $nov;?>" >
                    <br> 
                    <label for="Dece"><b>December</b></label>
                    <input type="text" name="Dece" value="<?php echo $dec;?>" >
                    <br> 
                    <button name="update" type="submit" class="registerbtn" value="Update">Update</button>
                    </div>
        </form>
        
    </body>
</html>

