<?php 
include("includes/connection.php");

$sql = " SELECT * FROM pdf ";

$res = mysqli_query($con,$sql);

?>
<?php 
session_start();

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}

?>
<?php 
$admin_session = $_SESSION['admin_email'];
$get_admin = "select * from admins where admin_email = '$admin_session'";
$run_admin = mysqli_query($con,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);

$admin_name = $row_admin['admin_name'];

$get_pdf = "select * from pdf";
$run_pdf = mysqli_query($con,$get_pdf);
$count_pdf = mysqli_num_rows($run_pdf);

$get_project = "select * from project";
$run_project = mysqli_query($con,$get_project);
$count_project = mysqli_num_rows($run_project);

$get_research = "select * from research";
$run_research = mysqli_query($con,$get_research);
$count_research = mysqli_num_rows($run_research);
 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

 
</head>
<body>
<div class="content-wrapper">
<?php include("includes/sidebar.php"); ?>
<div class="page-wrapper">

<div class="container-fluid">

<div class="top-space">

<div class="col-md-12">
    <?php 
    if(isset($_GET['dashboard'])){
        include("dashboard.php");
    }
    if(isset($_GET['view_pdf'])){
        include("view_pdf.php");
    }
    if(isset($_GET['view_preminary'])){
        include("view_preminary.php");
    }
    if(isset($_GET['view_project'])){
        include("view_project.php");
    }
    if(isset($_GET['insert_user'])){
        include("insert_user.php");
    }
    if(isset($_GET['view_users'])){
        include("view_users.php");
    }
    if(isset($_GET['delete_user'])){
        include("delete_user.php");
    }
    if(isset($_GET['download_file'])){
        include("download_file.php");
    }
    if(isset($_GET['delete_pdf'])){
        include("delete_pdf.php");
    }
    if(isset($_GET['delete_project'])){
        include("delete_project.php");
    }
    
    
    ?>

</div>

</div>

</div>

</div>
</div>
   




  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/tables/datatables-extensions/datatable-select.js"
  type="text/javascript"></script>
</body>
</html>