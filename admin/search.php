<?php 
@session_start();

@include("connection.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}

?>
<?php 
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($con,$_POST['search']);
        $sql = "SELECT * FROM pdf WHERE pdf_phone LIKE '%$search%' OR pdf_name LIKE '%$search%' OR pdf_email LIKE '%$search%'";
    }

?>