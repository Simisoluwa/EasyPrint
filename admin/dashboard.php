<?php 
@session_start();

@include("connection.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
}

?>


<div class="row">

<div class="col-lg-12">

<h1>Dashboard</h1>

<ol class="breadcrumb">
<li class="active">
<i class="fas fa-tachometer-alt"></i>Dashboard


</li>

</ol>
</div>
</div>


<section id="select">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Search for pdf requests</h4>
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
                        $get_pdf = "select 
                        * from pdf 
                        join project ON project.pdf_id = pdf.pdf_id
                        join research ON research.pdf_id = pdf.pdf_id
                        order by 1 DESC";

                        $run_pdf = mysqli_query($con,$get_pdf);

                        while($row_pdf = mysqli_fetch_array($run_pdf)){
                        $id = $row_pdf['pdf_id'];
                        $name = $row_pdf['pdf_name'];
                        $email = $row_pdf['pdf_email'];
                        $phone = $row_pdf['pdf_phone'];
                        $color = $row_pdf['pdf_color'];
                        $copies = $row_pdf['pdf_copies'];
                        $layout = $row_pdf['pdf_layout'];
                        $pdf = $row_pdf['pdf_file'];
                        $binding = $row_pdf['pdf_binding'];
                        $options = $row_pdf['pdf_options'];
                        $checkout = $row_pdf['pdf_checkout'];
                        $request = $row_pdf['pdf_request'];
                        $date = $row_pdf['pdf_date'];

                        $i++;


                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo $copies; ?></td>
                                <td><?php echo $color; ?></td>
                                <td><?php echo $layout; ?></td>
                                <td><?php echo $binding; ?></td>
                                <td><?php echo $options; ?></td>
                                <td><?php echo $checkout; ?></td>
                                <td><?php echo $request; ?></td>
                                <td><?php echo "<a href='download_file.php?down=$pdf'>$pdf</a><br>";?></td>
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


        <section id="select">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Search For Preminary Pdfs</h4>
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


        <section id="select">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Main Project PDFs</h4>
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
                        $get_pdf = "select * from research order by 1 DESC";

                        $run_pdf = mysqli_query($con,$get_pdf);

                        while($row_pdf = mysqli_fetch_array($run_pdf)){
                        $id = $row_pdf['research_id'];
                        $name = $row_pdf['research_name'];
                        $email = $row_pdf['research_email'];
                        $phone = $row_pdf['research_phone'];
                        $color = $row_pdf['research_color'];
                        $copies = $row_pdf['research_copies'];
                        $layout = $row_pdf['research_layout'];
                        $pdf = $row_pdf['research_file'];
                        $binding = $row_pdf['research_binding'];
                        $options = $row_pdf['research_options'];
                        $checkout = $row_pdf['research_checkout'];
                        $request = $row_pdf['research_request'];
                        $date = $row_pdf['research_date'];

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



<div class="row">
<div class="col-lg-3 col-md-6">
<div class="card border-primary">
<div class="card-header bg-primary">
<div class="row">
<div class="col-3">
<i class="fas fa-file-pdf fa-5x"></i>
</div>
<div class="col-9 text-right">
<div class="huge"><?php echo $count_pdf; ?></div>
<div class="text-captions">PDFS REQUEST</div>
</div>

</div>
</div>

<a href="index.php?view_pdf">
<div class="card-footer">

<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>
</div>

</a>

</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card border-success">
<div class="card-header bg-success">
<div class="row">
<div class="col-3">
<i class="fas fa-globe fa-5x"></i>
</div>
<div class="col-9 text-right">
<div class="huge"><?php echo $count_project; ?></div>
<div class="text-captions">Preminary</div>
</div>

</div>
</div>

<a href="index.php?view_preminary">
<div class="card-footer">

<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>
</div>

</a>

</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card border-success">
<div class="card-header bg-success">
<div class="row">
<div class="col-3">
<i class="fas fa-project-diagram fa-5x"></i>
</div>
<div class="col-9 text-right">
<div class="huge"><?php echo $count_research; ?></div>
<div class="text-captions">Main Project </div>
</div>

</div>
</div>

<a href="index.php?view_project">
<div class="card-footer">

<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>
</div>

</a>

</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card border-warning">
<div class="card-header bg-warning">
<div class="row">
<div class="col-3">
<i class="fas fa-users fa-5x"></i>
</div>
<div class="col-9 text-right">
<div class="huge">1</div>
<div class="text-captions">USERS</div>
</div>

</div>
</div>

<a href="index.php?view_users">
<div class="card-footer">

<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fas fa-arrow-circle-right"></i></span>

<div class="clearfix"></div>
</div>

</a>

</div>
</div>


</div>