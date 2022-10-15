<?php 
include('conn.php');
 include('admin_navbar.php');
?>


  <div class="show-records"  style="background-color:#F0F8FF; margin-left:21%;height:600px;width:78%;border-top:1px solid black   ; margin-top:10px;">
        
<h3 style="margin-top:6px;"> Planting Details!</h3>
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
<br><br><br>




<table class="table">
	<thead>
        <th>Sr.#</th>
        <th>Province</th>
        <th>Persenatge Of Coverage</th>
        <th>Status</th>
        <th>View Deatil</th>
  </thead>
  <tbody>
  	 <?php 
    $sno = 1;
    $sql = "SELECT `plant_id`, `name`, `cost`, `qty`, `de`, `province`, `district`, `area`, AVG(cover), `start_date`, `end_date`, `status`  FROM plant GROUP BY `province` ";
    $result = mysqli_query($conn,$sql); 

    while($row = mysqli_fetch_assoc($result))
      {
        ?>

    <tr>
     <?php echo '<th>'.$sno++.'</th>'?>  
     <td><?php echo $row['province'];?></td>
     <td><?php echo $row['AVG(cover)'];?>%</td>
     <td><?php echo $row['status'];?></td>
     <th><a href="open_planting_details.php?name=<?php echo $row['province'];?>" class="btn btn-info" style="border-radius: 0;">View</a></th>
     <!-- <td><a href="admin_view_planted_detail.php?plant_id=<?php echo $row['plant_id'];?>" class="btn btn-info">View</a></td> -->
     <!-- <td>
      <a href="admin_update_plant_Detail.php?plant_id=<?php echo $row['plant_id'];?>" class="btn btn-success">Update</a>
      ||
      <a href="admin_update_plant_Detail.php?plant_id=<?php echo $row['plant_id'];?>" class="btn btn-danger">Delete</a>
       

     </td> -->
    </tr>
  <?php }?>
  </tbody>
</table>
 </div>

     
</div>
    
</body>
</html>
