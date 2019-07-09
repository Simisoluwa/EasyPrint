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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
   

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
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


        <i class="fas fa-file-upload upload"></i><h5>UPLOAD YOUR RESEARCH PDF DOCUMENT</h5>
        <form class="form-horizontal" action="preminary.php" method="POST" enctype="multipart/form-data">
        <div class="form-group"><!--- form-group Starts -->
        <label class="col-md-3 control-label"> Enter your name </label>
        <div class="col-md-6">
        <input required type="text" name="research_name" class="form-control">
        </div>
        </div>
        <div class="form-group"><!--- form-group Starts -->
        <label class="col-md-3 control-label"> Enter your email </label>
        <div class="col-md-6">
        <input required type="email" name="research_email" class="form-control">
        </div>
        </div>
        <div class="form-group"><!--- form-group Starts -->
        <label class="col-md-3 control-label"> Enter your phone number </label>
        <div class="col-md-6">
        <input required type="text" name="research_phone" class="form-control">
        </div>
        </div>
        <div class="form-group"><!--- form-group Starts -->
        <label class="col-md-3 control-label"> Copies </label>
        <div class="col-md-6">
        <input required type="number" name="research_copies" class="form-control">
        </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Binding</label>
            <select id="inputState" class="form-control" name="research_binding">
                <option selected>Select</option> 
                <option value="Soft Cover">Soft Cover</option>
                <option value="Hard Cover">Hard Cover</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Color</label>
            <select id="inputState" class="form-control" name="research_color">
                <option selected>Select</option> 
                <option value="Color">Color</option>
                <option value="Black and White">Black and White</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Layout</label>
            <select id="inputState" class="form-control" name="research_layout">
                <option selected>Select</option> 
                <option value="Landscape">Landscape</option>
                <option value="Portrait">Portrait</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">How do you want to get it?</label>
            <select id="inputState" class="form-control" name="research_checkout">
                <option selected>Select</option> 
                <option value="Pick Up">Pick Up</option>
                <option value="Delivery">Delivery</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Other options</label>
            <select id="inputState" class="form-control" name="research_options">
                <option selected>Options</option> 
                <option value="Print all pages">Print all pages</option>
                <option value="Print one sided">Print one sided</option>
                <option value="Print on both sides">Print on both sides</option>
            </select>
        </div>

        <div class="form-group"><!-- form-group Starts -->
            <label class="col-md-3 control-label">Further details?</label>
            <div class="col-md-6">
            <textarea name="research_request" class="form-control" rows="6" cols="19" placeholder="Make it more expernatory by messaging us"></textarea>
            </div>

        </div>
       
        <div class="form-group"><!-- Form-group Starts -->
            <label class="col-md-3 control-label">Upload the file you want to print</label>
            <div class="col-md-6">
            <input required type="file" name="research_file" class="form-control">
            </div>
        </div>
        
        <div class="form-group"><!-- form-group Starts -->
            <label class="col-md-3 control-label"></label>
            <div class="col-md-6">
            <input type="submit" name="submit" class="btn btn-primary form-control" value="Print It">
        </div>
        
        </form><br><br><br>
        <div class="col-md-6">
                <img src="images/200.jpg" style="height:75px;float:left;display:inline-block;"><h3 style="color:#c0392b;font-size:25px;">No Risk. You are in good hands</h3>
                <p>Is your print is not exactly what you expected? No problem.We will get it right</p><br><br>

                <h4 style="color:#c0392b;font-size:20px;width:100%;">EasyPrint accepts the following format only</h4><br>
                <img src="images/pdf1.png" alt="" style="display:block;padding:5px;margin-left:80px;"><br>


                <img src="images/me.png" style="float:left;display:inline-block;padding:5px;"><h3 style="font-size:20px;">Need help? Call:<br><span style="color:#c0392b;font-size:18px;">+2348087172281,+2348087172281</span></h3>
                
        </div>
        
</body>
</html>

<?php
if(isset($_POST['submit'])){
$research_name = $_POST['research_name'];
$research_email = $_POST['research_email'];
$research_phone = $_POST['research_phone'];
$research_date = date("d M Y");
$research_color = $_POST['research_color'];
$research_copies = $_POST['research_copies'];
$research_layout = $_POST['research_layout'];
$research_binding = $_POST['research_binding'];
$research_options = $_POST['research_options'];
$research_checkout = $_POST['research_checkout'];
$research_request = $_POST['research_request'];


$research_file = $_FILES['research_file']['name'];
$temp_name = $_FILES['research_file']['tmp_name'];

move_uploaded_file($temp_name,"pdf_files/$research_file");

$insert_pdf = "insert into research (research_name,research_email,research_phone,research_date,research_color,research_copies,research_layout,research_file,research_binding,research_options,research_checkout,research_request) values 
('$research_name','$research_email','$research_phone','$research_date','$research_color','$research_copies','$research_layout','$research_file','$research_binding','$research_options','$research_checkout','$research_request')";

$run_insert = mysqli_query($con,$insert_pdf) or die("error ".mysqli_error($con));

if($run_insert){
echo "<script>alert('Your file has been uploaded')</script>";
echo "<script>window.open('login.php','_self')</script>";
}

}

?>