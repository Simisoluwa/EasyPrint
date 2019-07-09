<?php
@session_start();
include("includes/connection.php");

if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>";
}else{


?>

<?php

if(isset($_GET['delete_pdf'])){

$delete_id = $_GET['delete_pdf'];

$delete_pdf = "delete from pdf where pdf_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_pdf);

echo "<script>alert('Pdf has Been Deleted')</script>";
echo "<script>window.open('index.php?view_pdf','_self')</script>";

}

?>

<?php } ?>