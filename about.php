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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/nstyle.css" rel="stylesheet">      
<link href="css/about.css" rel="stylesheet">    
</head>
 <body>
  <div class="container-fluid"> 

    <div class="row">
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
            <li><a href="login.php">Log in</a></li>
            <li><a href="sign.php">Sign Up</a></li>
          
          </ul>
        </div>
      </div>
    </nav>

  

<!---------------------------------- Video ------------------------------>
 
 <div class="jumbotron-fluid">
 	<div class="icons">
 	 <button onclick="play()" class="fa fa-play"></button>
 	 <button onclick="pause()" class="fa fa-pause"></button>
 	 <button onclick="backward()" class="fa fa-backward"></button>  
 	 <button onclick="forward()" class="fa fa-forward"></button>
     <button onclick="openFullScreen()" class="fa fa-arrows-alt"></button>

</div>

 <div class="vd" >
 	<video id="video1" loop autoplay muted controls>
 		<source src="img/Intro.mp4">
 	</video>
 </div>
</div>

<script> 

var myVideo = document.getElementById("video1");
function play() { 
    myVideo.play(); 
 }
function pause(){
    myVideo.pause(); 

}

function forward(){
	myVideo.currentTime = myVideo.currentTime + 5;
}

function backward(){
	myVideo.currentTime = myVideo.currentTime - 5;
}

function openFullScreen() {
  if (myVideo.requestFullscreen) {
    myVideo.requestFullscreen();
  } else if (myVideo.mozRequestFullScreen) { /* Firefox */
    myVideo.mozRequestFullScreen();
  } else if (myVideo.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    myVideo.webkitRequestFullscreen();
  } else if (myVideo.msRequestFullscreen) { /* IE/Edge */
    myVideo.msRequestFullscreen();
  }
}
</script>




<!---------------------------------- About Us ------------------------------>

  <div class="col-md-6">
    <div class="abtco">
      <h1>Why we Started? </h1>
      <br>
      <div class="content">The story so far…<br><br>

Back in 2004, lots of people were trying to start businesses – many with brilliant ideas. But they were struggling to find the seed funding necessary to grow; and the best investors to guide their growth.
<br><br>
This got us thinking...
<br><br>
The problem was clearly undermining the startup scene: great ideas were not getting off the ground because it was hard to find investors.
<br><br>
We thought we could solve this. So, we set out to build an online platform connecting startups with a global network of angel investors.</div>
    </div>
  </div>
    



    
     <div class="abtbg" >
     </div> 
    


 
</div>



  

<!---------------------------------- Our Team ------------------------------>


   <div class="row">
    <br><br>
<h1 class="team" align="center">Our Team </h1>
<br>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/img3.jpg" alt="">
                </div>
                <div class="team-prof">
                    <h3 class="post-title">Sanket Salunkhe</h3>
                    <div class="border"></div>
                    <span class="post">Web Desginer</span>
                    <ul class="team_social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
<div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/img3.jpg" alt="" >
                </div>
                <div class="team-prof">
                    <h3 class="post-title">Utkarsh Bhaskarwar</h3>
                    <div class="border"></div>
                    <span class="post">Web Desginer</span>
                    <ul class="team_social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/img3.jpg" alt="" >
                </div>
                <div class="team-prof">
                    <h3 class="post-title">Sahil Waingankar</h3>
                    <div class="border"></div>
                    <span class="post">Web Desginer</span>
                    <ul class="team_social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="img/img3.jpg" alt="">
                </div>
                <div class="team-prof">
                    <h3 class="post-title">Aakanksh Krishnan</h3>
                    <div class="border"></div>
                    <span class="post">Web Desginer</span>
                    <ul class="team_social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
   
<br>
<br>
<br>
</div>

<!---------------------------------- Location ------------------------------>


<div class="row">
<br><br>
  <h1 class="loct" align="center" >Where we are Located? </h1>
<br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6694342848177!2d73.12547605028229!3d18.990200987074005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1600922689216!5m2!1sen!2sin"frameborder="0" style="border:0px solid gold;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>



</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>