<?php 
include('conn.php');
 include('admin_navbar.php');

 include('functions.php');

 if (!isLoggedIn()) {

  session_start();
  session_destroy();
  unset($_SESSION['user']);

  echo '<script>alert("You must log in first")</script>';
     
  echo '<script>window.location="index.php"</script>';
}

?>

    <div class="show-records"  style="background-color:#F0F8FF; margin-left:21%;height:600px;width:78%;border-top:1px solid black   ; margin-top:10px;">
        
<h3 style="margin-top:6px;"> Plants Records & Details.!</h3>
        <style>
          html{
            scroll-behavior: smooth;
          }
          body{
            background-color: #f0f8ff;

          }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  /*align:center;*/
  /*margin-left:10%;*/
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.form-control{
  width: 100%;
}
</style>

<div class="container-fluide">
 
  <div class="pull-right">
    <a href="view_planting_detail.php" class="btn btn-warning">View Planting Details</a>
    
  </div>

  <br>
  <div class="row">
    <center>
      <form  method="post" action="plantRecord-detail.php" enctype="multipart/form-data">

        <div class="col-sm-5">
          <br>
          <label>Plant Name</label>
          <input type="" class="form-control" name="name" required>
          <br>
          <label>Plant Cost</label>
          <input type="" class="form-control" name="cost" required>
          <br>
          <label>Quantity</label>
          <input type="" class="form-control" name="quantity" required>
          <br>
          <label>Upload Description File</label>
          <input type="file" class="form-control" name="image" required>
          <br>
          <label>Province</label>
          <!-- <input type="" class="form-control" name="province"> -->

          <select class="form-control" name="province" required/>
          <option value="">Select Province</option>
          <option value="Punjab">Punjab</option>
          <option value="Sindh">Sindh</option>
          <option value="Balochistan">Balochistan</option>
          <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
        </select>
      
        <label>District</label>
        <!-- <input type="" class="form-control" name=""> -->
        <select class="form-control" name="district" required/>
        <option value="">Select district</option>
        <?php 
        $sql = "SELECT * FROM destric"; 
        $re  = mysqli_query($conn,$sql);
        while($row =  mysqli_fetch_assoc($re))
        {

        ?>
        <option value="<?php echo $row['name'];?>|<?php echo $row['prov'];?>"><?php echo $row['name'];?></option>

      <?php } ?>
</select>
        <br>
        </div>

      <div class="col-sm-6">
        <label>Area Name</label>
        <input type="" class="form-control"  name="area" required>
        <br>
        <label>Persentage  of Coverage</label>
        <input type="" class="form-control" name="cover" required>
        <br>
        <label>Start Date</label>
        <input type="date" class="form-control" name="s_date" required>
        <br>
        <label>End Date</label>
        <input type="date" class="form-control" name="e_date" required>
        <br>
        <label>Status</label>
        <select class="form-control" name="status" required>
          <option>Select Status</option>
          <option value="Pending">Pending</option>
          <option value="Started">Started</option>
          <option value="Ended">Ended</option>
          <option value="In Process">In Process</option>
          <option value="Completed">Completed</option>
          <option value="Canceled">Canceled</option>
        </select>
        <br>

        <input type="submit" class="btn btn-success" name="add" value="Add Detail">
      </div>
    </form>
  </center>
</div>
</div>
</div>

















    
</div>
    
</body>
</html>


<?php 

if (isset($_POST['add']))
{

  $name = $_POST['name'];
  $cost = $_POST['cost'];
  $quantity = $_POST['quantity'];
 
  // $province = $_POST['province'];

 $district = $_POST['district'];
 $result_explode = explode('|', $district);
 $dis = $result_explode[0];
 $prov   = $result_explode[1];




    // $district = $_POST['district'];
  $area     = $_POST['area'];
  $cover    = $_POST['cover'];
  $s_date = $_POST['s_date'];
  $e_date = $_POST['e_date'];
  $status = $_POST['status'];

  $folder = "images/".$_FILES['image']['name'];

  $image   = $_FILES['image']['name'];


// INSERT INTO `plant`(`plant_id`, `name`, `cost`, `qty`, `de`, `province`, `district`, `area`, `cover`, `start_date`, `end_date`, `status`) VALUES 

$add = "INSERT INTO `plant`( `name`, `cost`, `qty`, `de`, `province`, `district` , `area`, `cover`, `start_date`, `end_date`, `status`)

VALUES ('$name','$cost','$quantity','$image','$prov','$dis','$area','$cover','$s_date','$e_date','$status')";

// print_r($addProduct);

  $addResult = mysqli_query($conn, $add);
  

  if($addResult)
  {
    if(mysqli_affected_rows($conn) > 0)
    {
      
      
        echo '<script>alert("Your New Plant Detail Is Added")</script>';
        echo'<script>window.location="plantRecord-detail.php"</script>';
  
      
    }
    
  }
  else
  {
    echo '<script>alert("connection error")</script>';
  }
// }

if (move_uploaded_file($_FILES['image']['tmp_name'], $folder)) {
  echo "image uploaded ";
  // echo '<script>alert("image upploaded")</script>';
}else
{
  echo "image not uploaded";
  // echo '<script>alert("not uploaded")</script>';
}
  


}




?>