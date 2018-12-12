<?php

include ('../../vendor/mpdf/mpdf/mpdf.php');
include_once ("../../vendor/autoload.php");
use App\StudentResults\StudentResults;

$obj = new StudentResults();
$allData = $obj->Pdf($_GET['id']);

$res="";

foreach ($allData as $data):
$res.="<tr>";
    $res.="<td>".$data['name']."</td>";
    $res.="<td>".$data['email']."</td>";
    $res.="<td>".$data['regnum']."</td>";
    $res.="<td>".$data['department']."</td>";
    $res.="<td>".$data['course']."</td>";
    $res.="<td>".$data['grade_letter']."</td>";
    $res.="</tr>";
endforeach;
$html=<<<EOD
    
<table border="1" cellpadding="0" align="center" style="text-align: center;" cellspacing="0">
    <thead >
    <tr>
        <th  style="height: 50px; background-color: #f4f4f4;">Name</th>
        <th  style="width: 150px; background-color: #f4f4f4;">Email</th>
        <th style="background-color: #f4f4f4;">Regester No.</th>
        <th  style="width: 120px; background-color: #f4f4f4;">Department</th>
        <th style="background-color: #f4f4f4;">Course</th>
        <th style="background-color: #f4f4f4;">Grade</th>
    </tr>
    </thead>
    
    <tbody>
        $res;
    </tbody>
</table>
EOD;

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();
exit();




?>


