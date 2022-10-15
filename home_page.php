<?php  
include('conn.php');
include('functions.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Design side</title>
	


	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  

	<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}


@media screen and (min-width: 992px){
.modal_con{
     width: 700px; 
}
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


/*  header css*/
.jumbotron{
	height: 50%;

	background: url("pic/leaf.jpg") no-repeat center center/cover ;
	/*object-fit: cover;*/

}
.jumbotron h1{
  
  font-size: 3.5rem;
  color: #614119;
}

.jumbotron p{

  font-size: 1.5rem;
  color: #614119;
}

/*flip card design css*/

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #ffff;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}



/*footer css*/

.jumbotron-fluid{
  background-color:#042906;
  color: white;
}



</style>
</head>
<body>

 <nav class="navbar navbar-inverse" style="margin-bottom: 0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="plant_modal.php">Plants Modal</a></li>
        <li><a href="index_planted_tree_record.php">Planted Tree Record</a></li>
        <li><a href="index_area_covered_record.php">Area Covered Record</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="about_us.php">About Us</a></li>
      </ul>
    </div>
  </div>
</nav> 
<!-- header -->
<div class="jumbotron text-center">
	<h1 style="text-align: left;">                                                                                                
	</h1>
	<h1>A tree is known by its fruit;</h1><h1>  A Man by his deeds</h1>
  <p>Flower will not grow, if the stem doesn't allow.</p> 
	<h1>                                                                                                 
	</h1>
	<h1>                                                                                                 
	</h1>
	<h1>                                                                                                 
	</h1>
</div>


<!-- login modal -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="#" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pic/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container modal_con">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container modal_con" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>  
   



<!-- register -->
<div id="id02" class="modal">
  
  <form class="modal-content animate"  method="post">
    <?php echo display_error(); ?>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pic/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container modal_con">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

       <label for="uname"><b>User Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password_1" required>
        
      <button type="submit" name="register_btn">Register</button>
    
    </div>

    <div class="container modal_con" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>  

   


  <!-- login & register button -->
	<div class="container text-center">
		<div class="row">
      <div class="col">
			
			<h2 style="color: brown;">Flower will not grow, if the stem doesn't allow.</h2>
			<p style="color: brown;">A tree is known by its fruit; a man by his deeds</p>
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

		      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
        
				
			</div>
		
		    
	  </div>
  </div>
    <br>

   <!-- About us  -->
    <div class="container">
    	<div class="row">
    		<div class="col text-center">
    			<h1>About US</h1>
    			<p>Growing is another image of giving life to someone!
    				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    			</p>
    			<img src="pic/basil.jpg" style=" width:60%; height: 60%; ">
    		</div>
    	</div>
    	
    </div>
 
    <!-- Services -->
    <div class="container-fluid text-center">
      <h1>Learn Services </h1>
    	<div class="row text-center table-striped table-bordered">
    	
    					<div class="col ">
    						
                
                <!-- new flip car design  -->
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="pic/sapling.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                      <h1>Service 1</h1>
                      <p><a href="#">text where information will open im modal </a></p>
                      <p>We love that guy</p>
                    </div>
                  </div>
                </div>


    				
    					</div>    				
    			
    				    <div class="col " >
    						<!-- <h3>Service 1</h3> -->

                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="pic/leaf.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                      <h1>Service 1</h1>
                      <p>Architect & Engineer</p>
                      <p>We love that guy</p>
                    </div>
                  </div>
                </div>



    					</div>    				
    			  <div class="col ">

                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="pic/flower.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                      <h1>Service 1</h1>
                      <p>Architect & Engineer</p>
                      <p>We love that guy</p>
                    </div>
                  </div>
                </div>

    					
    				</div>    				
    			
    	</div>
    </div>
    	
    <br>
    <br>

  <div class="container" style="background-color: #4F913B  ;">
    	<div class="row" >
    		<div class="col text-center">
    			<h1>Contact US</h1>
    			<form class="form-contol">
    			<div class="container" style="background-color:#07A722    ">
    				<div class="row" >
    					<div class="col-md-4">
    						<input type="text"  class="form-contol" name="">
    					</div>
    					<div class="col-md-4">
    						<input type="text"  class="form-contol" name="">
    					</div>
    					<div class="col-md-4">
    						<input type="text"  class="form-contol" name="">
    					</div>
    					<div class="col-md-4">
    						<input type="text"  class="form-contol" name="">
    					</div>
    					<div class="col-md-4">
    						<input type="text"  class="form-contol" name="">
    					</div>

    					
    				</div>
    				<input type="submit" name="">

    			</div>
    		</form>


    			
    			
    		</div>
    	</div>
    	
    </div>
<!-- </div> -->

<!-- footer 
 -->
 <br>

<div class="jumbotron-fluid text-center" style="height: 30%; margin-bottom:0">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3>Services </h3>
        <h6>lorem </h6>
        <h6>lorem </h6>
        <h6>lorem </h6>
      </div>
      <div class="col">
        <h3>Services </h3>
        <h6>lorem </h6>
        <h6>lorem </h6>
        <h6>lorem </h6>
      </div>
      <div class="col">
        <h3>Services </h3>
        <h6>lorem </h6>
        <h6>lorem </h6>
        <h6>lorem </h6>
      </div>
    </div>
    
  </div>
  <p>All rights reserved by Go Green Earth (Footer)</p>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>