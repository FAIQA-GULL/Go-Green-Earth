
<?php
    $conn = mysqli_connect("localhost","root","","mc190406567");
    if ($conn)
    {
       $sql = "SELECT * FROM user_info WHERE user_type='admin' ";
       $q=mysqli_query($conn, $sql);
       $rowcount=mysqli_num_rows($q);
       
      ?>

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
        
<h3 style="margin-top:6px;"> Admin Records & Details.!</h3>
<style>
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
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row=mysqli_fetch_assoc($q))
       {
           ?>
         
      <tr>
          <td><?php echo $row['user_name'];?></td>
          <td><?php echo $row['user_email'];?></td>
          <td><?php echo $row['user_password'];?></td>
          <td><a class="btn btn-success" href="editadmin.php?email=<?php echo $row['user_email'];?>&id=<?php echo $row['user_name']; ?>&pass=<?php echo $row['user_password'];?>">Edit</a></td>
          <td><a class="btn btn-danger" href="deleteadmin.php?user=<?php echo $row['user_email']; ?>">Delete</a></td>
      </tr>
    <?php
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


?>

    </tbody>
  </table>
  




</div>     
    
</body>
</html>
