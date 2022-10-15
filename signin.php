<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-4">
      <h1 class="text-center">Login Please</h1>
      <form class="form" method="POST" action="">
        <div class="form-group">
            <label class=" control-label">Email</label>  
            <input name="email" placeholder="EMAIL" class="form-control input-md" required="" type="email">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Password</label>  
            <input name="password" placeholder="********" class="form-control input-md" required="" type="password">
          </div>
        <div class="form-group">
            <input  name="Login" type="submit" value="Login"  class="form-control btn btn-primary" >
          </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>     
</body>
</html>
<?php
if (isset($_POST['Login'])) 
{
	$username= $_SESSION['email'] = $_POST['email'];
	$userpassword=$_POST['password'];	
    $conn = mysqli_connect("localhost","root","","mc190406567");
    if ($conn)
    {
	   $sql="SELECT * FROM admin WHERE email='$username' AND pass='$userpassword'";
       $q=mysqli_query($conn, $sql);
       if ($q)
       {
		header('Location: dash.php');
       }
       else
       {
		echo " <script> alert('Invalid username and password')</script>";
       }

    }
    else
    {
        echo"
           <div class='container'>
             <div class='alert alert-danger'>
                <strong>Danger!</strong> Error DataBase Connection Failed.
             </div>
           </div>
             ";
    }

}
?>
