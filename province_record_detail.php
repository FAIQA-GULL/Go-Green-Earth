<?php 
include('conn.php');
 // include('admin_navbar.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        p{
            color:black;
            padding-top: 7px;
            padding-left:10%;
            width: 90%;
         
        }
        .header-below{
            background-color:green; 
            height:40%;
            width:80%;
            border-top:1px solid white;
            margin-top:3%;}
    </style>
</head>
<body style="color:green;">
    <nav>
        <label class="logo" style="color:red">Dashboard</label>       
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Our Mission</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="admin-login.php">Logout</a></li>
            
        </ul>
   </nav>
  
 <!-- <div class="header-below" style="background-color:#F0F8FF;height:100px;width:100%;border-top:1px solid white; margin-top:0.3px;">

        <a href="http://localhost/test-phase/add-admin.php"><strong><input type="button"  style="width:290px;height:42px;background-color:#1E90FF; margin-left:160px; margin-top:20px; border-radius: 15px;color:white"value="+ ADD ADMIN" ></strong></a>

        <a href="http://localhost/test-phase/add-plants.php"><input type="button"  style="width:290px;height:42px;background-color:green; border-radius: 15px; margin-left:20px; color:white"value="+ ADD PLANTS">  </a>

        <a href="http://localhost/test-phase/add-ditrictProvince.php"><input type="button"  style="width:290px;height:42px;background-color:orange; border-radius: 15px; margin-left:20px; color:white"value="+ ADD DISTRICT/PROVINCE" ></a>

 </div> -->

<!-- <div class="sidebar">
            <label class="side-logo">
                <img src="images/22.png">
            </label>
            <ul>
                <li class="side-list"><a href="http://localhost/test-phase/dash.php">Admin Records & Details.!</a></li>
                <li class="side-list"><a href="http://localhost/test-phase/plantRecord-detail.php">Plants Records Details</a></li>
                <li class="side-list"><a href="http://localhost/test-phase/provinceRecord-detail.php">Province Record Details</a></li>
                <li class="side-list"><a href="http://localhost/test-phase/areaCover-detail.php">Area Covered Details.</a></li>
               
            </ul>


    </div> -->
    <div class="show-records"  style="background-color:#F0F8FF; margin-left:10%;height:600px;margin-right: 10%; margin-top:10%;">
        
<h3 style="margin-top:6px;">Province Records & Details.!</h3>
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
  <div class="pull-right">
    <a href="areaCover-detail.php" class="btn btn-warning">Back to Provinces</a>
    
  </div>
  <br>  <br>  <br>  <br>

  <div class="row">

    <table class="table">
    <thead>
    <th>Sr.#</th>
    <th>Province</th>
    <th>District</th>
    <th>Area Cover <b>FROM</b> </th>
    <th>Area Cover <b>TO</b> </th>
    <th>Coverage in Persentage</th>
    <th>Project Start</th>
    <th>Project End</th>
    <th>Status</th>
    <th>Update</th>
    <th>Delete</th>
    
  </thead>
  <tbody>
    <?php
    $sno=1;
    $pro_name = $_GET['pro_name'];

    $sql = "SELECT * FROM `province_record` WHERE pro_name = '$pro_name'";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
      <?php echo '<th>'.$sno++.'</th>'?>
      <!-- <td><?php echo $row['pro_id'];?></td>> -->
      <td><?php echo $row['pro_name'];?></td>
      <td><?php echo $row['district'];?></td>
      <td><?php echo $row['from_area'];?></td>
      <td><?php echo $row['to_area'];?></td>
      <td><?php echo $row['percentage'];?>%</td>
      <td><?php echo $row['s_date'];?></td>
      <td><?php echo $row['e_date'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><a href="update_provinces_record_detail.php?pro_id=<?php echo $row['pro_id'];?>&pro_name=<?php echo $row['pro_name'];?>" class="btn btn-success">Update</a></td>
      <td><a href="update_provinces_record_detail.php?pro_id=<?php echo $row['pro_id'];?>&pro_name=<?php echo $row['pro_name'];?>" class="btn btn-danger">Delete</a></td>
    </tr>

    <?php   }
    ?>
  </tbody>
</table>

    
  </div>
  
</div>
</div>









































</body>
</html>


<!-- 
<?php 

if (isset($_POST['add'])) 
{
  $name     = $_POST['province'];
  $district = $_POST['district'];
  $from     = $_POST['from'];
  $to       = $_POST['to'];
  $s_date   = $_POST['s_date'];
  $e_date   = $_POST['e_date'];
  $persentage = $_POST['persentage'];
  $status   = $_POST['status'];

  $sql = "INSERT INTO `province_record`(`pro_name`, `district`, `to_area`, `from_area`, `s_date`, `e_date`, `percentage`, `status`) 
  VALUES ('$name','$district','$to','$from','$s_date','$e_date','$persentage','$status')";

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

?> -->