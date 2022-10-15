
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Distric</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-4">
      <h1>Add New Distric</h1>
      <form class="form" method="POST" action="">
        <div class="form-group">
            <label class=" control-label">Distric Name</label>  
            <input name="title" placeholder="NAME" class="form-control input-md" required="" type="text">
          </div>
        <div class="form-group">
			<label class=" control-label" >Select Province</label>
			<select name="prov" class="form-control input-md">
				<option value="Punjab">Punjab</option>
				<option value="Sindh" >Sindh</option>
				<option value="Khyber Pukhton Khawan">KPK</option>
				<option value="Balochistan">Balochistan</option>
				<option value="Gilgit" >GilgitBaltistan</option>
			</select>  
          </div>
        
        
        <div class="form-group">
            <input  name="Add_Destric" type="submit" value="Add Distric"  class="form-control btn btn-primary" >
          </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>     
</body>
</html>
<?php
if (isset($_POST['Add_Destric'])) 
{
    
	$name = $_POST['title'];
	$prov = $_POST['prov'];
    $conn = mysqli_connect("localhost","root","","mc190406567");
    if ($conn)
    {
		$sql="INSERT INTO destric (name, prov)
		VALUES ('$name', '$prov')";
       $q=mysqli_query($conn, $sql);
       if ($q)
       {
           echo"
           <div class='container'>
             <div class='alert alert-success'>
				<strong>Success!</strong> New Distric Added successfully.<br><br>
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
                <strong>Warning!</strong> New Distric Not Added successfully.
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
