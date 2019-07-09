<?php 
include("includes/connection.php");

if (isset($_GET['down'])){
    $pdf = basename($_GET['down']);
    $filePath = 'pdf_files/'.$pdf;
    if(!empty($pdf) && file_exists($filePath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$pdf");
        header("Content-Type: application/pdf");
        header("Content-Transfer-Encoding: binary");
        
        readfile($filePath);
        exit;
    }
    
}


?>