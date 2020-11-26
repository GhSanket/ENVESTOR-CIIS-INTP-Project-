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

               <a class="navbar-brand " href="index.php"><img src="img/logo.gif" height="65px;" width="250px;" alt=""></a> 
         
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right ">
            <li><a href="index.php">Home</a></li>
            <li><a href="hit.php">How it Works</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a data-toggle="modal" data-target="#admin">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Fixed Top Navbar-->

    <div id="home">
      <div class="jumbotron-fluid">
        <div class="col-md-3">
          <div class="left">
              <div class="landing-text">

         <a href="login.php" class="btn btn-default btn">Login</a>
         <br><br>
           
         <a href="sign.php" class="btn btn-default btn">Sign Up</a>
           
             </div>

        </div>
      </div>



        <div class="col-md-9">
          
          <div class="right">
            <img src="img\v2.jpg" alt="banner">
          


           </div>
           
           <div class="admin">

<!-- Modal -->
<div id="admin" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
          <div class="fa fa-address-card">Login</div></h4>
      </div>
      <div class="modal-body">



        <form class="form1" name="create" action="php/adminpro.php"  method="post">
      <input class="username" name="username"  align="center" placeholder="Name*" required>
      <input class="password" type="password" name="password"  align="center" placeholder="Password*" required>
      
      <button type="submit" id="adlog" class="btn" align="center" value="Submit">Login</button>
      
      </form>  
      


      </div>
    </div>

  </div>
</div>
      </div>    
</div>
       </div>
       
	












     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>