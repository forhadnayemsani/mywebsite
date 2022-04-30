<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style type="text/css">
.name{
    color: whit;
    }	
.background{
    background-color: #F6BE00;
}
.work{
font-size: 20px;
color: whit;
font-family: Century Gothic;
}
.nav1{
    margin: auto;
}
.person{
    color: gray;
}
.circle{
border-radius: 10px;
}       
.layout1{
    height: 170%;
    background-color: #202A44;
    color: white;
}
.image1{
margin-left: 5%;
 }
.box{
    height: 220px;
}
.wrapper{
    width: 40%;
    min-width: 510px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    margin-bottom: 900px;
}
.container{
    width: 100%;
    padding: 30px 30px 50px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 20px 30px rgba(0,0,0,0.2);
    background-color:#FDD017;
} 
.container *{
    font-family: "Poppins",sans-serif;
    color: black;
    font-weight: 500;
}
.header2{
    margin-bottom: 50px;
    letter-spacing: 2px;
    text-align: center;
    font-size: 33px;
    font-weight: bold;
    color: #202A44;
}
.details{
    width: 100%;
    display: flex;  
    justify-content: space-between;
    margin-bottom: 10px;
}
.bar{
    position: relative;
    border: 2px solid #0d96e0;
    border-radius: 20px;
}
.bar div{
    position: relative;
    width: 0;
    height: 9px;
    border-radius: 10px;
    background-color: black;
}
.skills:not(:last-child){
    margin-bottom: 30px;
}
#html-bar{
    animation: html-fill 3s forwards;
}
@keyframes html-fill{
    100%{
        width: 90%;
    }
}
#css-bar{
    animation: css-fill 3s forwards;
}
@keyframes css-fill{
    100%{
        width: 75%;
    }
}
#javascript-bar{
    animation: js-fill 3s forwards;
}
@keyframes js-fill {
    100%{
        width: 72%;
    }
}
#jQuery-bar{
    animation: jQuery-fill 3s forwards;
}
@keyframes jQuery-fill{
    100%{
        width: 78%;
    }
} 
#Mysql{
    animation: jQuery-fill 3s forwards;
}
@keyframes jQuery-fill{
    100%{
        width: 80%;
    }
} 
.myskills{
margin-top: 5000px;
}
.border2 {
    
    height: 100%;
    width: 100%;
    background: linear-gradient(90deg, black 50%, transparent 50%), 
                linear-gradient(90deg, black 50%, transparent 50%), 
                linear-gradient(0deg, black 50%, transparent 50%), 
                linear-gradient(0deg, black 50%, transparent 50%);
    background-repeat: repeat-x, repeat-x, repeat-y, repeat-y;
    background-size: 16px 4px, 16px 4px, 4px 16px, 4px 16px;
    background-position: 0% 0%, 100% 100%, 0% 100%, 100% 0px;
    border-radius: 5px;
    padding: 10px;
    animation: dash 5s linear infinite;
}
@keyframes dash {
    to {
        background-position: 100% 0%, 0% 100%, 0% 0%, 100% 100%;
    }
}
.bcg{
    background-color: black;
}
.fcf-btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}
.fcf-btn-primary:focus, .fcf-btn-primary.focus {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}
.fcf-btn-lg, .fcf-btn-group-lg>.fcf-btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}
.fcf-btn-block {
    display: block;
    width: 100%;
}
.fcf-btn-block+.fcf-btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].fcf-btn-block, input[type="reset"].fcf-btn-block, input[type="button"].fcf-btn-block {
    width: 100%;
}
.input3{
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom-color: #0C090A;
background-color:#202A44 ;
color: white;
}
    </style>
</head>
<body class="background">
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bcg p-4">
      <h4 class="text-white">Ask</h4>
      <span class="text-muted">click to ask</span>
      <div>hek akjsdf sadffsdfff</div>
    </div>
  </div>
  <nav class="navbar navbar-dark bcg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <i class="fa-solid fa-user-tie fa-2x person"></i>
  </nav>
</div>
<br><br>
<div class="row">
    <div class="col-6 box">
        <div class="image1 w-100 mr-3">
 <img class="circle w-100" src="mypic.jpg">
</div>
<div style="margin-top: 80px;" class="ml-4 text-center text-white">
<h3>My Effort</h3>
<p>Website is a modern medium that beautifully presents the workplace of any organization.It is my endeavor to reach out to clients by making this modern medium safe and quality.</p>
</div> 
    </div>
 <div class="col-6">  
<div class="ml-lg-5 ml-md-4">
<h2 class="">Forhad Nayem Sany,</h2>
<h6>(WEB DEVELOPER)</h6>
<p style="font-family: Lucida Sans;">
    Hello! this is forhad.A frontend and backend web application developer. I try to do my work in highest importance and in an orderly manner.
</p>
</div>
 </div>
</div>
<div class="layout1 mt-lg-5">
<div class="row mb-lg-3 ">
<div class=""></div>
<div class="col-12 mt-sm-5">
<div class="row">
<div class="col-lg-6 col-md-6 ">
</div>
<div class="col-lg-6 col-md-6 w-md-75 ">
<h3 class="text-center">Samples of my projects</h3>
<div class="m-sm-4 m-md-2 m-lg-3 ">
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="work2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="work3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="work0.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</div>
</div>
</div>
  </a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="mt-5 col-lg-6 col-md-5 col-sm-12 text-center mb-sm-3">
    <div class="border2 ml-lg-4 ml-md-2">
    <h2>My approach</h2>
    <p>i don't think any project is small. Every 24 hours after receiving the project, I try to inform the client about the updated information about the project. I strive to work with the utmost sincerity and fidelity</p>
</div>
</div>
<div class="col-lg-6 col-md-7 col-sm-12">
<div class="wrapper h-50  mr-4">
  <div class="container">
<h2 class="header2">SKILLS </h2>
 <div class="skills">
   <div class="details">
     <span>HTML</span>
     <span>90%</span>
   </div>
   <div class="bar">
      <div id="html-bar"></div>
   </div>
 </div>
<div class="skills">
   <div class="details">
     <span>CSS</span>
     <span>75%</span>
   </div>
   <div class="bar">
      <div id="css-bar"></div>
   </div>
 </div>
<div class="skills">
   <div class="details">
     <span>Javascript</span>
     <span>72%</span>
   </div>
   <div class="bar">
      <div id="javascript-bar"></div>
   </div>
 </div>
 <div class="skills">
   <div class="details">
     <span>PHP</span>
     <span>70%</span>
   </div>
   <div class="bar">
      <div id="jQuery-bar"></div>
   </div>
 </div>
 <div class="skills">
   <div class="details">
     <span>MySQL</span>
     <span>70%</span>
   </div>
   <div class="bar">
      <div id="Mysql"></div>
   </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div style="
color: white;
margin-top:550PX;
background-color: #202A44;">
<h2 class="pt-2 mb-4 text-center">Contact us</h2>
<div class="row">
 <div class="col-sm-12 col-md-12 col-lg-6 mb-lg-2">
<?php 
if (isset($_POST['submit'])) {
$username = $_POST['name'];
$msg = $_POST['message'];
$mail = $_POST['email'];
$to_email = "forhadnayemsani@gmail.com";
$subject = "Hello this is $username";
$body = "$msg......My email:$mail";
$headers = "From:$mail";
if (mail($to_email, $subject, $body, $headers)) {
    echo "<h5 class='text-center'>Thank you. We will get back to you shortly.</h5> ";
}else{
    echo "Email sending failed...";
}
}
?>
<form class="ml-4 text-center" method="post">
    <input class="input3 w-75" type="text" name="name" placeholder="Enter your name"><br><br>
    <input class="input3 w-75" type="text" name="email" placeholder="Enter a valid email address"><br><br>
    <textarea rows="4" class="input3 w-75" name="message" cols="18"></textarea><br><br>
    <input style="background-color:#2B3856; width: 200px; border-color: black;" type="submit" name="submit" value="Send">
</form>
</div>
 <div class="col-sm-12 col-md-12 col-lg-6 text-center">
<h4 class="text-center name mt-5">Forhad Nayem Sany</h4>
<p class="text-center work">Web Developer,</p>
<div class="nav1">
<div class="row">
    <div class="col-4 col-lg-4"></div>
 <div class="d col-1 text-right "><a href="https://www.facebook.com/profile.php?id=100069547911693"><i class= "font1 fab fa-facebook fa-2x "></i></a></div>
   <div class="d col-1 text-right"><a href=""><i class="fab fa-instagram fa-2x font1"></i></a></div>
    <div class="d col-1 text-right"><a href=""><i class="font1 fab fa-twitter fa-2x"></i></a></div>
   <div class="d col-1 text-right"><a href=""><i class="font1 fab fa-linkedin-in fa-2x"></i></a></div>
   <div class="col-4 col-lg-5"></div>
</div>
</div>
<p class="contact text-center">Email:forhadnayemsani@gmail.com</p>
<p>Hire me on freelancer.com
<a href="https://www.freelancer.com/u/forhadnayemsani">Hire forhad</a>
</p>
 </div>   
</div>
</div>
<footer class="bg-dark">@
</footer>
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="node_modules/@fortawesome/fontawesome-free/js/all.js" charset="utf-8"></script>
<script src="https://kit.fontawesome.com/71d9d5edd9.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>