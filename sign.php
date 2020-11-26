
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
    <link href="css/sign.css" rel="stylesheet">
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
            <li><a href="login.php">Log In</a></li>
          
          </ul>
        </div>
      </div>
    </nav>



<div class="container">
  
    <div class="col-md-3"></div>
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <div class="main">
    <p class="sign" align="center">Welcome!
    </p>




<!-- HTML VALIDATION -->
     <form class="form1" name="sign" action="php/signpro.php" method="post" onsubmit="return validateForm()" >      
      <label class="radio-inline"><input type="radio" name="option" checked align="center" value="Entrepreneur">I'm an Entrepreneur</label>
       <label class="radio-inline"><input type="radio" name="option" align="center" value="Investor">I'm an Investor</label>
       <input class="un "  name="username" type="text" align="center" placeholder="Username*" required autofocus pattern="(?=.*\d)(?=.*[a-z A-Z]).{1,}"  title="Username should be combination of numbers and alphabets  eg: Sanket12" maxlength="15"        minlength="3">
      <input class="email " name="email" type="text" align="center" placeholder="Email*" required>
      <input class="pass"  name="password"  type="password" align="center" placeholder="Password*" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password should be combination of number, uppercase letter and lowercase letter and at least 8 characters long."><br>
       <button type="submit" class="btn" align="center" value="Submit">Register</button>
       </form>       
      

    </div>
    </div>






  </div>

<!--  JAVASCRIPT VALIDATION -->  
 <script>
	function validateForm() {
  var user = document.forms["sign"]["username"].value;
  var passwd = document.forms["sign"]["password"].value;
  var prof= document.forms["sign"]["option"].value;
  var eid= document.forms["sign"]["email"].value;
  var atposition=eid.indexOf("@");  
  var dotposition=eid.lastIndexOf(".");   
  if(user == "") {
    alert("Enter Username.");
    return false;
  }
  else if(passwd == ""){
    alert("Enter Password.");
    return false;
  }
  else if(eid == ""){
    alert("Enter Email.");
    return false;
  }
  else if ((passwd.length)<8) {
  	alert("Password must be at least 8 characters long.");
  	return false;
  }
else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=eid.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  }}
</script>




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>