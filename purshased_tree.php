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
        
<h3 style="margin-top:6px;">Enter Purshased Tree Record!</h3>
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
  width: 30%;
}
</style>
<br><br>

    <div class="container-fluide">
    	<div class="row">

            <form method="post">

            <div class="col">
    		<label>Tree Name</label>	
    		<input type="" class="form-control" name="t_name">
    		</div>

    		<div class="col">
    			<label>Cost</label>
    			<input type="" class="form-control" name="t_cost">
    		</div>

    		<div class="col">
    			<label>Quatity</label>
    			<input type="" class="form-control" name="qty">

    			
    		</div>

    		<br><br>

    		<input type="submit" class="btn btn-success" name="add" value="Add details">

    	</form>
    	</div>







	</div>
</div>

<?php 

if (isset($_POST['add']))
{
	$name = $_POST['t_name'];
	$cost = $_POST['t_cost'];
	$qty = $_POST['qty'];

	$t = ($_POST['t_cost'] * $_POST['qty']);

	$sql = "INSERT INTO `pushase_tree`(`tree_name`, `cost`, `qty`, `total`) 

	VALUES ('$name','$cost','$qty','$t')";

	$re= mysqli_query($conn,$sql);

	 echo '<script>alert("Data Added")</script>';


}


?>