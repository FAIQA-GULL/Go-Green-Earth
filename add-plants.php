<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Plant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-4">
      <h1>Add New Plant</h1>
      <form class="form" method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label class=" control-label">Plant Name</label>  
            <input name="title" placeholder="NAME" class="form-control input-md" required="" type="text">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Plant Cost</label>  
            <input name="cost" placeholder="Rs.100000" class="form-control input-md" required="" type="text">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Plant Quantity</label>  
            <input name="qty" placeholder="20" class="form-control input-md" required="" type="text">
          </div>

          <div class="form-group">
            <label class=" control-label">Plant image</label>  
            <!-- <input name="qty" placeholder="20" class="form-control input-md" required="" type="text"> -->
            <input type="file" class="form-control" name="image">
          </div>
		  <div class="form-group">
  			<label>Plant Description</label>
  			<textarea class="form-control" rows="5" name="des"></textarea>
          </div>
        
        <div class="form-group">
            <input  name="Add_Plant" type="submit" value="Add Plant"  class="form-control btn btn-primary" >
          </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>     
</body>
</html>
<?php
if (isset($_POST['Add_Plant'])) 
{
    
	$name = $_POST['title'];
	$cost = $_POST['cost'];
	$qty = $_POST['qty'];
	$des = $_POST['des'];	

   $folder = "images/".$_FILES['image']['name'];

  $image   = $_FILES['image']['name'];


    $conn = mysqli_connect("localhost","root","","mc190406567");
	
    if ($conn)
    {
      // INSERT INTO `plant_modal`(`p_id`, `name`, `image`, `cost`, `qty`, `de`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])


		$sql="INSERT INTO `plant_modal`(`name`, `image`, `cost`, `qty`, `de`) 
		VALUES ('$name','$image', '$cost', '$qty', '$des')";
       $q=mysqli_query($conn, $sql);
       // print_r($sql);
       if ($q)
       {
           echo"
           <div class='container'>
             <div class='alert alert-success'>
				<strong>Success!</strong> New Plant Added successfully.<br><br>
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
                <strong>Warning!</strong> New Plant Not Added successfully.
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

if (move_uploaded_file($_FILES['image']['tmp_name'], $folder))
{
  echo "image uploaded ";
 
}else
{
  echo "image not uploaded";
 
}
  

}
?>
