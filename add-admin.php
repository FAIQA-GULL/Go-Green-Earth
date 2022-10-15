
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-4">
      <h1>ADD New Admin</h1>
      <form class="form" method="POST" action="">
        <div class="form-group">
            <label class=" control-label">Admin Name</label>  
            <input name="name" placeholder="NAME" class="form-control input-md" required="" type="text">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Email</label>  
            <input name="email" placeholder="EMAIL" class="form-control input-md" required="" type="email">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Password</label>  
            <input name="password" placeholder="********" class="form-control input-md" required="" type="password">
          </div>
        <div class="form-group">
            <input  name="Add_Admin" type="submit" value="Add"  class="form-control btn btn-primary" >
          </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>     
</body>
</html>
<?php
if (isset($_POST['Add_Admin'])) 
{
    
	$name= $_SESSION['name'] = $_POST['name'];
	$email= $_SESSION['email'] = $_POST['email'];
	$userpassword=$_POST['password'];	
    $conn = mysqli_connect("localhost","root","","mc190406567");
	
    if ($conn)
    {
		$sql="INSERT INTO user_info (user_name, user_email, user_password,user_type)
		VALUES ('$name', '$email', '$userpassword','admin')";
		
       $q=mysqli_query($conn, $sql);
       if ($q)
       {
           echo"
           <div class='container'>
             <div class='alert alert-success'>
				<strong>Success!</strong> New Admin Added successfully.<br><br>
				<a class='btn btn-primary' href='dash.php'>Goto Dashboard</a>
             </div>
           </div>
             ";
       }
       else
       {
           echo"
           <div class='container'>
             <div class='alert alert-warning'>
                <strong>Warning!</strong> New Admin Not Added successfully.
             </div>
           </div>
             ";
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
