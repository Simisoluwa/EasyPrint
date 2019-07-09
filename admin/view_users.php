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
<i class="fas fa-tachometer-alt"></i>Dashboard / View Users
</li>

</ol>
</div>
</div>


<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
View All Users
</div>
<div class="card-body">
<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead>
<tr>
<th>User No</th>
<th>User Name</th>
<th>User Email</th>
<th>User Delete</th>

</tr>


</thead>
<tbody>
<?php 
$i = 0;
$get_admin = "select * from admins";
$run_admins = mysqli_query($con,$get_admin);
while($row_admins = mysqli_fetch_array($run_admins)){
$admin_id = $row_admins['admin_id'];
$admin_name = $row_admins['admin_name'];
$admin_email = $row_admins['admin_email'];
$i++;
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $admin_name; ?></td>
<td><?php echo $admin_email; ?></td>
<td><a href="index.php?delete_user=<?php echo $admin_id; ?>"><i class="fas fa-trash-alt"></i>Delete</a></td>

</tr>
<?php } ?>
</tbody>


</table>

</div>

</div>


</div>


</div>





</div>