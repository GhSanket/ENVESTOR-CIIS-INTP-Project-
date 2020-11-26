<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Envestors</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/nstyle.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <!--Fixed Top Navbar-->
    <nav class="navbar navbar-default navbar-fixed-top text-center" id="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle text-center" data-toggle="collapse" data-target  ="
            #navbar-collapse">
              <span class="sr-only">Toogle Navigation</span> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

               <a class="navbar-brand " href="index.php"><img src="img\logo.gif" height="65px;" width="250px;" alt=""></a> 
         
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right ">
            <li><a href="index.php">Home</a></li>
            <li><a href="hit.php">How it Works</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="sign.php">Sign Up</a></li>
          
          </ul>
        </div>
      </div>
    </nav>


<div class="container">
  <div class="col-md-6">
  <div class="main">
    <p class="sign" align="center">Welcome Back!
    </p>

    <form class="form1" name="login" action="php/loginpro.php" onsubmit="return validateForm()" method="post">
      
      <label class="radio-inline"><input type="radio" name="option" checked align="center" value="Entrepreneur">I'm an Entrepreneur</label>
      <label class="radio-inline"><input type="radio" name="option" align="center" value="Investor">I'm an Investor</label>
      <input class="un " name="username" type="text" align="center" placeholder="Username*" required autofocus >
      <input class="pass" name="password"  type="password" align="center" placeholder="Password*" required><br>
      <button type="submit" class="btn" align="center" value="Submit">Sign in</button>
      <p class="forgot" align="center">Not Yet Registered ?     <a href="sign.php">SignUp Now</a></p> 

      </form>      
      

    </div>
    </div>
    <div class="col-md-6"></div>  </div>


<script>
  function validateForm() {
  var user = document.forms["login"]["username"].value;
  var passwd = document.forms["login"]["password"].value;
  var prof= document.forms["login"]["option"].value;
  if(user == "") {
    alert("Enter Username.");
    return false;
  }
  else if(passwd == ""){
    alert("Enter Password.");
    return false;
  }
  
 

}
</script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>