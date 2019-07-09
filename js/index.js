firebase.auth().onAuthStateChanged(function(user){
    if(user) {
  
      document.getElementById("user_div").style.display = "block";
      document.getElementById("login_div").style.display = "none";
  
      var user = firebase.auth().currentUser;
  
      if(user != null){
        var username = user.displayName;
        var email_id = user.email;
        document.getElementById("user_para").innerHTML = email_id;
      }
  
    } else {
      document.getElementById("user_div").style.display = "none";
      document.getElementById("login_div").style.display = "block";
    }
  
  });
  
  
  function login(){
    var userEmail = document.getElementById("email_field").value;
    var userPass = document.getElementById("password_field").value;
  
    firebase.auth().signInWithEmailAndPassword(userEmail,userPass).catch(function(error){
  
      var errorCode = error.code;
      var errorMessage = error.message;
  
      alert("Error: "+errorMessage);
    });
  }
  
  function create_account(){
    var userEmail = document.getElementById("email_field").value;
    var userPass = document.getElementById("password_field").value;
  
    var isSuccessful = true
  
    firebase.auth().createUserWithEmailAndPassword(userEmail,userPass).catch(function(error){
  
      var isSuccessful = true
      var errorCode = error.code;
      var errorMessage = error.message;
  
      if (isSuccessful) {
        alert('Successfully created your account.');
        window.open('login.php','_self'); 
      } else{
        alert(errorMessage);
      }
  
  })
  
  }
  function forgot_password(){
    var userEmail = document.getElementById("email_field").value;

    firebase.auth().sendPasswordResetEmail(userEmail).then(function() {
      alert('Please check your email for your password reset link.');
    }).catch(function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
      if(errorCode == 'auth/invalid-email'){
          alert(errorMessage);
      } else if(errorCode == 'auth/user-not-found'){
          alert(errorMessage);
      }
      console.log(error);
    });
  }
  
  
  function logout(){
    firebase.auth().signOut();
  }