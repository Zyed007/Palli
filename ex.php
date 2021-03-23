<?php  
$connect = mysqli_connect("localhost", "root", "", "palli");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM masjid";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>MembershipNo</th>  
                         <th>Name</th>  
                         <th>MobileNo</th>  
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["MembershipNo"].'</td>  
                         <td>'.$row["Name"].'</td>  
                         <td>'.$row["MobileNo"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
