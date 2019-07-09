<?php
include("includes/connection.php");


?>

<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Easy Prints</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/pdf1.css">
    <link rel="stylesheet" href="css/query.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>

    
    <script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>
    <script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyAV8al5CORAK1dMTzK1ekco338tBa6bqd8",
        authDomain: "easyprint-14936.firebaseapp.com",
        databaseURL: "https://easyprint-14936.firebaseio.com",
        projectId: "easyprint-14936",
        storageBucket: "",
        messagingSenderId: "9362476506"
    };
    firebase.initializeApp(config);
    </script>

    <script src="js/script.js"></script>



</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="images/rectangle.png" alt="" class="image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about-us.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact Us
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-mobile"></i>+234-808717221</a>
                <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i>Email Us</a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-download"></i> Download Now</a>
        </li>
            </ul>
            
        </div>
        </nav>

        <h5>UPLOAD YOUR PDF DOCUMENT</h5>
        <div class="row">
           <div class="col-md-6">
                <form class="form-horizontal" action="pdf.php" method="POST" enctype="multipart/form-data">
                <div class="form-group"><!--- form-group Starts -->
                <label class="col-md-12 control-label"> Enter your name </label>
                <div class="col-md-12">
                <input required type="text" name="pdf_name" class="form-control">
                </div>
                </div>
                <div class="form-group"><!--- form-group Starts -->
                <label class="col-md-6 control-label"> Enter your email </label>
                <div class="col-md-12">
                <input required type="email" name="pdf_email" class="form-control">
                </div>
                </div>
                <div class="form-group"><!--- form-group Starts -->
                <label class="col-md-3 control-label"> Enter your phone number </label>
                <div class="col-md-12">
                <input required type="text" name="pdf_phone" class="form-control">
                </div>
                </div>
                <div class="form-group"><!--- form-group Starts -->
                <label class="col-md-6 control-label"> Copies </label>
                <div class="col-md-12">
                <input required type="number" name="pdf_copies" min="1" class="form-control" id="pdf_copies">
                </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputState">Binding</label>
                    <select id="inputState" class="form-control" name="pdf_binding">
                        <option selected>Select</option>
                        <option value="Soft Cover">Soft Cover</option>
                        <option value="Hard Cover">Hard Cover</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputState">Color</label>
                    <select id="pdf_color" class="form-control" name="pdf_color">
                        <option selected>Select</option> 
                        <option value="Color">Color</option>
                        <option value="Black and White">Black and White</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputState">Layout</label>
                    <select id="inputState" class="form-control" name="pdf_layout">
                        <option selected>Select</option> 
                        <option value="Landscape">Landscape</option>
                        <option value="Portrait">Portrait</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputState">How do you want to get it?</label>
                    <select id="pdf_checkout" class="form-control" name="pdf_checkout">
                        <option selected>Select</option> 
                        <option value="Pick Up">Pick Up</option>
                        <option value="Delivery">Delivery</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputState">Other options</label>
                    <select id="inputState" class="form-control" name="pdf_options">
                        <option selected>Options</option>
                        <option value="Print all pages">Print all pages</option>
                        <option value="Print one sided">Print one sided</option>
                        <option value="Print on both sides">Print on both sides</option>
                    </select>
                </div>
                <div class="form-group"><!-- form-group Starts -->
                    <label class="col-md-12 control-label">Further details?</label>
                    <div class="col-md-12">
                    <textarea name="pdf_request" class="form-control" rows="6" cols="19" placeholder="Make it more expernatory by messaging us"></textarea>
                    </div>

                </div>
            
                <div class="form-group"><!-- Form-group Starts -->
                    <label class="col-md-12 control-label">Upload the file you want to print</label>
                    <div class="col-md-12">
                    <input required type="file" name="pdf_file" class="form-control">
                    </div>
                </div>

                <div class="form-group"><!-- form-group Starts -->
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-6">
                    <input type="submit" name="submit" class="btn btn-primary form-control" value="Print It"><br><br>
                </div>
            
                </form>
            </div>
            <div class="col-md-12 big-screen">
                <img src="images/200.jpg" style="height:75px;float:left;display:inline-block;"><h3 style="color:#c0392b;font-size:25px;">No Risk. You are in good hands</h3>
                <p style="color:#2980b9;font-size:17px;font-style:bold;">Your print is not exactly what you expected? No problem.We will get it right</p><br><br>

                <h4 style="color:#c0392b;font-size:20px;width:100%;">EasyPrint accepts the following format only</h4><br>
                <img src="images/pdf1.png" alt="" style="display:block;padding:5px;margin-left:80px;"><br>


                <img src="images/me.png" style="float:left;display:inline-block;padding:5px;"><h3 style="font-size:20px;">Need help? Call:<br><span style="color:#c0392b;font-size:18px;">+2348087172281,+2348087172281</span></h3>
                
            </div>
        </div>
       


            

        
        
        
</body>
</html>

<?php

//this is our upload folder
$upload_path = 'uploads/';
 
//Getting the server ip
$server_ip = gethostbyname(gethostname());
 
//creating the upload url
$upload_url = "http://localhost/printit/pdf.php";
 
//response array
$response = array();
 
 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //checking the required parameters from the request
    if(isset($_POST['name']) and isset($_FILES['pdf']['name'])){
 
        //connecting to the database
        $connect = mysqli_query($con) or die("error ".mysqli_error($con));
 
        //getting name from the request
        $name = $_POST['name'];
 
        //getting file info from the request
        $fileinfo = pathinfo($_FILES['pdf_file']['name']);
 
        //getting the file extension
        $extension = $fileinfo['extension'];
 
        //file url to store in the database
        $file_url = $upload_url . getFileName() . '.' . $extension;
 
        //file path to upload in the server
        $file_path = $upload_path . getFileName() . '.'. $extension;
 
        //trying to save the file in the directory
        try{
            //saving the file
            move_uploaded_file($_FILES['pdf_file']['tmp_name'],$file_path);
            $sql = "insert into pdf (pdf_name,pdf_email,pdf_phone,pdf_date,pdf_color,pdf_copies,pdf_layout,pdf_file,pdf_binding,pdf_options,pdf_checkout,pdf_request) values 
            ('$pdf_name','$pdf_email','$pdf_phone','$pdf_date','$pdf_color','$pdf_copies','$pdf_layout','$pdf_file','$pdf_binding','$pdf_options','$pdf_checkout','$pdf_request')";
 
            //adding the path and name to database
            if(mysqli_query($con,$sql)){
 
                //filling response array with values
                $response['error'] = false;
                $response['url'] = $file_url;
                $response['name'] = $name;
            }
            //if some error occurred
        }catch(Exception $e){
            $response['error']=true;
            $response['message']=$e->getMessage();
        } 
        //closing the connection
        mysqli_close($con);
    }else{
        $response['error']=true;
        $response['message']='Please choose a file';
    }
    
    //displaying the response
    echo json_encode($response);
}
 
/*
We are generating the file name
so this method will return a file name for the image to be upload
*/
function getFileName(){
    $connect = mysqli_query($con) or die("error ".mysqli_error($con));
    $sql = "SELECT max(id) as id FROM pdf";
    $result = mysqli_fetch_array(mysqli_query($connect,$sql));
 
    mysqli_close($con);
    if($result['id']==null)
        return 1;
    else
        return ++$result['id'];
}

if(isset($_POST['submit'])){
$pdf_name = $_POST['pdf_name'];
$pdf_email = $_POST['pdf_email'];
$pdf_phone = $_POST['pdf_phone'];
$pdf_date = date("d M Y");
$pdf_color = $_POST['pdf_color'];
$pdf_copies = $_POST['pdf_copies'];
$pdf_layout = $_POST['pdf_layout'];
$pdf_binding = $_POST['pdf_binding'];
$pdf_options = $_POST['pdf_options'];
$pdf_checkout = $_POST['pdf_checkout'];
$pdf_request = $_POST['pdf_request'];
$pdf_price = $_POST['pdf_price'];


$pdf_file = $_FILES['pdf_file']['name'];
$temp_name = $_FILES['pdf_file']['tmp_name'];

move_uploaded_file($temp_name,"pdf_files/$pdf_file");


$insert_pdf = "insert into pdf (pdf_name,pdf_email,pdf_phone,pdf_date,pdf_color,pdf_copies,pdf_layout,pdf_file,pdf_binding,pdf_options,pdf_checkout,pdf_request,pdf_price) values 
('$pdf_name','$pdf_email','$pdf_phone','$pdf_date','$pdf_color','$pdf_copies','$pdf_layout','$pdf_file','$pdf_binding','$pdf_options','$pdf_checkout','$pdf_request','$pdf_price')";

$run_insert = mysqli_query($con,$insert_pdf) or die("error ".mysqli_error($con));

if($run_insert){
echo "<script>alert('Your file has been uploaded')</script>";
echo "<script>window.open('login.php','_self')</script>";
}

}

?>