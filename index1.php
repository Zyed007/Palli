<?php
require_once('connection.php');
$query=$db->query("select * from masjid order by MembershipNo asc");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>View</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="css/sample/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/sample/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/sample/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/sample/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/sample/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/sample/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/sample/css/util.css">
	<link rel="stylesheet" type="text/css" href="css/sample/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th >MembershipNo</th>
								<th >Name</th>
								<th >Mobile No</th>
								<th >Jan</th>
								<th >Feb</th>
								<th >Mar</th>
                                <th >Apr</th>
                                <th >May</th>
                                <th >Jun</th>
                                <th >Jul</th>
                                <th >Aug</th>
                                <th >Sep</th>
                                <th >Oct</th>
                                <th >Nov</th>
                                <th >Dec</th>
							</tr>
						</thead>
						<tbody>
                        <?php
        if($query->num_rows>0)
        {
            $i=0;
            while($row=$query->fetch_assoc())
            {
                $i++;
            ?>
            <tr>
            
            <td><?php echo $row['MembershipNo']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['MobileNo']; ?></td>
            <td><?php echo $row['Jan']; ?></td>
            <td><?php echo $row['Feb']; ?></td>
            <td><?php echo $row['Mar']; ?></td>
            <td><?php echo $row['Apr']; ?></td>
            <td><?php echo $row['May']; ?></td>
            <td><?php echo $row['Jun']; ?></td>
            <td><?php echo $row['Jul']; ?></td>
            <td><?php echo $row['Aug']; ?></td>
            <td><?php echo $row['Sep']; ?></td>
            <td><?php echo $row['Oct']; ?></td>
            <td><?php echo $row['Nov']; ?></td>
            <td><?php echo $row['Dece']; ?></td>
            </tr>       
            <?php
            }
        }
        else{
        ?>
        
        <tr><td colspan="6">No member is found...</td></tr>
        <?php
        }
        ?>
        
								
						</tbody>
		            </table>
                    <div class="button1">     
      <form action="export.php" method="POST">
<button class="button2" type="submit">Export</button>
</form>
                    </div>
                </div>
			</div>
		</div>
	</div>


	

</body>
</html>