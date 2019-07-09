

<?php 
@session_start();

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}

?>

<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
<li class="active">
<i class="fas fa-tachometer-alt"></i>Dashboard / Insert User
</li>

</ol>

</div>
</div>

<div class="row">
<div class="col-lg-12">

<div class="card">
<div class="card-header">
Insert User
</div>

<div class="card-body">

<form class="form-horizontal" method="POST" enctype="multipart/form-data">
<div class="form-group row">
<label class="col-md-3 control-label">User Name</label>
<div class="col-md-6">
<input type="text" name="admin_name" class="form-control">
</div>

</div>
<div class="form-group row">
<label class="col-md-3 control-label">User Email</label>
<div class="col-md-6">
<input type="text" name="admin_email" class="form-control">
</div>

</div>

<div class="form-group row">
<label class="col-md-3 control-label">User Password</label>
<div class="col-md-6">
<input type="password" name="admin_pass" class="form-control">
</div>

</div>

<div class="form-group row">
<label class="col-md-3 control-label"></label>
<div class="col-md-6">
<input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">
</div>

</div>



</form>

</div>

</div>


</div>

</div>

<?php 
if(isset($_POST['submit'])){
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_pass = $_POST['admin_pass'];

    $insert_admin = "insert into admins(admin_name,admin_email,admin_pass)
    values ('$admin_name','$admin_email','$admin_pass')";

    $run_admin = mysqli_query($con,$insert_admin);

    if($run_admin){
        echo "<script>alert('A user has been inserted successfully')</script>";
        echo "<script>window.open('index.php?view_users','_self')</script>";
    }

}


?>