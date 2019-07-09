<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EasyPrints</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
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

    <script src="js/index.js"></script>

    <script>
        $( '#loading').on('click',function(){
            $(this).button('loading').delay();
        });
    </script>
  
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
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-download"></i> Download Now</a>
        </li>
            </ul>
            
        </div>
        </nav>

         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="heading">SIGN UP</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
              
                </div>
                <div class="col-md-6 center">
                    <label for="name_field"><p class="email">First Name</p></label>
                    <input type="text" id="first_field" class="form-control" placeholder="First Name" required />
                    <label for="name_field"><p class="email">Last Name</p></label>
                    <input type="text" id="last_field" class="form-control" placeholder="Last Name" required />
                    <label for="email_field"><p class="email">Email Address</p></label>
                    <input type="email" id="email_field" class="form-control" placeholder="Email" required />
                    <label for="password_field"><p class="email">Password</p> </label>
                    <input type="password" id="password_field" class="form-control" placeholder="Password" required /><br>
                    <button class="btn btn-primary" id="loading" data-loading-text="Loading..." onclick="create_account()" autocomplete="off">SIGN UP</button>
                </div>
                <div class="col-md-3">
              
                </div>
            </div>
         </div>

         <?php include("includes/footers.php"); ?>
</body>
</html>