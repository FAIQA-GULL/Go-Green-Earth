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
        
<h3 style="margin-top:6px;">Add Province Records & Details.!</h3>
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
  align:center;
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
</style>

<div class="container-fluide">
  
  <br>

  <div class="row">
    <form method="POST" >
      <!-- <div class="col-sm-3"></div> -->
    <div class="col-sm-5">

      <label>Province Name</label>
      <select class="form-control" name="province" required/>
          <option value="">Select Province</option>
          <option value="Punjab">Punjab</option>
          <option value="Sindh">Sindh</option>
          <option value="Balochistan">Balochistan</option>
          <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
        </select>
        <br>
        <label>District Name</label>
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
        <label>District Area Covered <b>FROM</b> </label>
        <input type="" class="form-control" name="from">
        <br>
        <label>District Area Covered <b>TO</b> </label>
        <input type="" class="form-control" name="to">
        <br>
        <label>Start Date</label>
        <input type="date" class="form-control" name="s_date">
        <br>
      </div>
        <div class="col-sm-6">
        <label>End Date</label>
        <input type="date" class="form-control" name="e_date">
        <br>
        <label>Persentage of coverage</label>
        <input type="" class="form-control" name="persentage">
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

        <input type="submit" name="add" class="btn btn-success">

    </div>
  </form>

    
  </div>
  
</div>
</div>


    
</body>
</html>



<?php 

if (isset($_POST['add'])) 
{
  // $name     = $_POST['province'];
  // $district = $_POST['district'];
  $district = $_POST['district'];
 $result_explode = explode('|', $district);
 $dis = $result_explode[0];
 $name   = $result_explode[1];

  $from     = $_POST['from'];
  $to       = $_POST['to'];
  $s_date   = $_POST['s_date'];
  $e_date   = $_POST['e_date'];
  $persentage = $_POST['persentage'];
  $status   = $_POST['status'];

  $sql = "INSERT INTO `province_record`(`pro_name`, `district`, `to_area`, `from_area`, `s_date`, `e_date`, `percentage`, `status`) 
  VALUES ('$name','$dis','$to','$from','$s_date','$e_date','$persentage','$status')";

  $addResult  = mysqli_query($conn,$sql);  

  if($addResult)
  {
    if(mysqli_affected_rows($conn) > 0)
    {
      
      
        echo '<script>alert("New Province Detail Added")</script>';
        echo'<script>window.location="provinceRecord-detail.php"</script>';
  
      
    }
    
  }
  else
  {
    echo '<script>alert("connection error")</script>';
  }

}

?>