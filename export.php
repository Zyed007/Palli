<?php
    require_once('connection.php');

    function filterData(&$str){ 
        $str = preg_replace("/\t/","\\t",$str); 
        $str = preg_replace("/\r?\n/","\\n",$str); 
        if(strstr($str,'"'))$str='"'.str_replace('"','""',$str).'"'; 
    }

// Excel file name for download 
$fileName = "members_export_data-".date('Ymd').".csv"; 
 
// Column names 
$fields=array('MembershipNo','Name','MobileNo','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dece'); 
 
// Display column names as first row 
$excelData=implode("\t",array_values($fields))."\n"; 
 
// Get records from the database 
$query=$db->query("SELECT * FROM Masjid ORDER BY MembershipNo ASC"); 
if($query->num_rows>0){ 
    // Output each row of the data 
    $i=0; 
    while($row=$query->fetch_assoc()){$i++; 
        $rowData=array($i,$row['MembershipNo'],$row['Name'],$row['MobileNo'],$row['Jan'],$row['Feb'],$row['Mar'],$row['Apr'],$row['May'],$row['Jun'],$row['Jul'],$row['Aug'],$row['Sep'],$row['Oct'],$row['Nov'],$row['Dece']);
        array_walk($rowData,'filterData'); 
        $excelData.=implode("\t", array_values($rowData))."\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'."\n"; 
     
} 
 
// Headers for download 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
header("Content-Type: application/vnd.ms-excel"); 
 
// Render excel data 
echo $excelData; 
 
exit; 





?>
