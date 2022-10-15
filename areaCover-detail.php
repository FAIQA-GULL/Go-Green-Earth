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
        
<h3 style="margin-top:6px;"> Area Cover Records & Details.!</h3>
        <style>
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
<br><br>
<table class="table">
  <thead>
   <th>Sr.#</th>
    <th>Province</th>
    <th>Coverage in Persentage</th>
    <th>Project Start</th>
    <th>Project End</th>
    <th>Status</th>
    <th>View Detail</th>
  </thead>
  <tbody>
    <?php 
    $sno= 1;

    $p = "SELECT `pro_name`, `district`, `to_area`, `from_area`, `s_date`, `e_date`, AVG(`percentage`), `status` FROM `province_record` GROUP BY pro_name ORDER BY pro_id DESC ";
    $pro = mysqli_query($conn,$p);



    while($row = mysqli_fetch_assoc($pro))
    {



    ?>

    <tr>
      <?php echo '<th>'.$sno++.'</th>'?>
      <td><?php echo $row['pro_name'];?></td>
      <td><?php echo $row['AVG(`percentage`)'];?>%</td>
      <td><?php echo $row['s_date'];?></td>
      <td><?php echo $row['e_date'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><a href="province_record_detail.php?pro_name=<?php echo $row['pro_name'];?>" class="btn btn-success">View</a></td>
    </tr>


  <?php }?>
  </tbody>
</table>

    </div>




    
</div>
    
</body>
</html>
