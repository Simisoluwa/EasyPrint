<?php 
include("includes/connection.php");

if (isset($_GET['down'])){
    $pdf = $_GET['down'];

    $res = mysqli_query("SELECT * FROM project WHERE project_file='$pdf'");

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($pdf).'"');
    header('Content-Length: ' . filesize($pdf));
    readfile($pdf);
}


?>
