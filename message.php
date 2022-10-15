<?php 
include('conn.php');
 include('admin_navbar.php');
?>

 <div class="show-records"  style="background-color:#F0F8FF; margin-left:21%;height:600px;width:78%;border-top:1px solid black   ; margin-top:10px;">
        
<h3 style="margin-top:6px;"> Admin Records & Details.!</h3>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
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
<br><br>

    <div class="container">
      <h2>Complaints </h2>
      <br>
    	

            <table class="table">
              <thead>
                <th>Email</th>
                <th>Subjec</th>
                <th>Message</th>
              </thead>
              <tbody>
                <?php
                 $sql="SELECT * FROM msg WHERE category = 'contact'"; 
                 $re=mysqli_query($conn,$sql);
                 while($row= mysqli_fetch_assoc($re))
                 {
                 ?>

                <tr>

                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['subject'];?></td>
                  <td><?php echo $row['msg'];?></td>
                </tr>

              <?php } ?>
              </tbody>
              
            </table>
    







	</div>


  
   <div class="container">
    <h2>FeedBack </h2>
      <br>
      <div class="row">

            <table class="table">
              <thead>
                <th>Email</th>
                <th>Subjec</th>
                <th>Message</th>
              </thead>
              
              <tbody>
                <?php
                 $sql="SELECT * FROM msg WHERE category = 'feedback'"; 
                 $re=mysqli_query($conn,$sql);
                 while($row= mysqli_fetch_assoc($re))
                 {
                 ?>

                <tr>

                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['subject'];?></td>
                  <td><?php echo $row['msg'];?></td>
                </tr>

              <?php } ?>
              </tbody>
            </table>
      </div>







  </div>
</div>

</body>
</htm>