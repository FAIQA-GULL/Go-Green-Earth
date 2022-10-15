<?php 
include('conn.php');

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
        .header-below{background-color:green;height:40%;width:80%;border-top:1px solid white;margin-top:3%;}
    </style>
</head>
<body style="color:green;">
    <nav>
        <label class="logo" style="color:red">Dashboard</label>       
        <ul>
            <li><a href="dash.php">Home</a></li>
         <!--    <li><a href="#">Our Mission</a></li>
            <li><a href="#">Services</a></li> -->
            <li><a href="message.php">Messages</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
   </nav>


<div class="show-records"  style="background-color:#F0F8FF; margin-left:5%;height:600px;margin-right: 5%; margin-top:10%;">
        
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
    <a href="view_planting_detail.php" class="btn btn-warning">Back to Details</a>
    
  </div>
  <br>  <br>  <br>  <br>

  <div class="row">

    <table class="table">
   

     <thead>
        <th>Sr.#</th>
        <th>Plant Name</th>
        <th>Quantity</th>
        <th>Cost</th>
        <th>District</th>
        <th>Area</th>
        <th>Coverage</th>
        <th>Started</th>
        <th>Ended</th>
        <th>Status</th>
        <th>View Deatil</th>
        <th>Update ||  Delete</th>
  </thead>


    
  
  <tbody>
    <?php 
    $pro = $_GET['name'];
    $sno = 1;
    $sql = "SELECT * FROM plant WHERE province = '$pro'";
    $result = mysqli_query($conn,$sql); 

    while($row = mysqli_fetch_assoc($result))
      {
        ?>

    <tr>
     <?php echo '<th>'.$sno++.'</th>'?>
     <td><?php echo $row['name'];?></td>    
     <td><?php echo $row['qty'];?></td>
     <td><?php echo $row['cost'];?></td>
     <td><?php echo $row['district'];?></td>
     <td><?php echo $row['area'];?></td>
     <td><?php echo $row['cover'];?>%</td>
     <td><?php echo $row['start_date'];?></td>
     <td><?php echo $row['end_date'];?></td>
     <td><?php echo $row['status'];?></td>
     <td><a href="admin_view_planted_detail.php?plant_id=<?php echo $row['plant_id'];?>" class="btn btn-info">View</a></td>
     <td>
      <a href="admin_update_plant_Detail.php?plant_id=<?php echo $row['plant_id'];?>&pro_name=<?php echo $row['province'];?>" class="btn btn-success">Update</a>
      ||
      <a href="admin_update_plant_Detail.php?plant_id=<?php echo $row['plant_id'];?>&pro_name=<?php echo $row['province'];?>" class="btn btn-danger">Delete</a>
       

     </td>
    </tr>
  <?php }?>
  </tbody>
</table>

    
  </div>
  
</div>
</div>




</body>
</html>