<?php
include('conn.php');
include('index_navbar.php');

?>

<div class="container">
  <div class="pull-right">
    <a href="index_area_covered_record.php" class="btn btn-warning">Back to Provinces</a>
    
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
    <!-- <th>Update</th>
    <th>Delete</th> -->
    
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
     <!--  <td><a href="update_provinces_record_detail.php?pro_id=<?php echo $row['pro_id'];?>&pro_name=<?php echo $row['pro_name'];?>" class="btn btn-success">Update</a></td>
      <td><a href="update_provinces_record_detail.php?pro_id=<?php echo $row['pro_id'];?>&pro_name=<?php echo $row['pro_name'];?>" class="btn btn-danger">Delete</a></td> -->
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

