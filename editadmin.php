<?php
$email = $_GET['email'];
    $id = $_GET['id'];
    $pass= $_GET['pass'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-4">
      <h1>Update Admin Details</h1>
      <form class="form" method="POST" action="">
        <div class="form-group">
          <input type="hidden" name="email" value="<?php echo $email;?>">
            <label class=" control-label">Admin Name</label>  
            <input name="name"  placeholder="Name" class="form-control input-md" required="" type="text" value="<?php echo $id;?>">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Password</label>  
            <input name="password"  placeholder="Password" class="form-control input-md" required="" type="text" value="<?php echo $pass;?>">
          </div>
        <div class="form-group">
            <input  name="Update_Admin" type="submit" value="Update"  class="form-control btn btn-primary" >
          </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>     
</body>
</html>
<?php 
if (isset($_POST['Update_Admin'])) 
{
    $conn = mysqli_connect("localhost","root","","mc190406567");
	$name= $_SESSION['name'] = $_POST['name'];
	$userpassword=$_POST['password'];	
  $email = $_POST['email'];
    if ($conn)
    {
		$sql = "UPDATE user_info SET user_name='$name', user_password='$userpassword' WHERE user_email='$email'";
    print_r($sql);
       $q=mysqli_query($conn, $sql);
       if ($q)
       {
           echo"
           <div class='container'>
             <div class='alert alert-success'>
				<strong>Success!</strong> Admin Data Updated successfully.<br><br>
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
                <strong>Warning!</strong> Admin Data Not Updated successfully.
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
