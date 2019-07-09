
<?php 
@session_start();

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}

?>



 <!-- Select items -->
 <section id="select">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">View Preminary Pdf</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered responsive dataex-select-selectitems">
                      <thead>
                        <tr>
                        <th>No</th>    
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Color</th>
                        <th>Copies</th>
                        <th>Layout</th>
                        <th>Binding</th>
                        <th>Options</th>
                        <th>Checkout</th>
                        <th>Request</th>
                        <th>File</th>
                        <th>Date</th>
                        </tr>
                      </thead>
            <tbody>
            <?php 
            $i = 0; 
            $get_proj = "select * from project order by 1 DESC";

            $run_proj = mysqli_query($con,$get_proj);

            while($row_pdf = mysqli_fetch_array($run_proj)){
            $id = $row_pdf['project_id'];
            $name = $row_pdf['project_name'];
            $email = $row_pdf['project_email'];
            $phone = $row_pdf['project_phone'];
            $color = $row_pdf['project_color'];
            $copies = $row_pdf['project_copies'];
            $layout = $row_pdf['project_layout'];
            $pdf = $row_pdf['project_file'];
            $binding = $row_pdf['project_binding'];
            $options = $row_pdf['project_options'];
            $checkout = $row_pdf['project_checkout'];
            $request = $row_pdf['project_request'];
            $date = $row_pdf['project_date'];

            $i++;


            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $color; ?></td>
                    <td><?php echo $copies; ?></td>
                    <td><?php echo $layout; ?></td>
                    <td><?php echo $binding; ?></td>
                    <td><?php echo $options; ?></td>
                    <td><?php echo $checkout; ?></td>
                    <td><?php echo $request; ?></td>
                    <td><?php echo "<a href='download_file.php?down=$pdf'><i class='fas fa-download-alt'></i>Download</a><br>";?></td>
                    <td><?php echo $date; ?></td>

                </tr>
                    <?php } ?>
            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>