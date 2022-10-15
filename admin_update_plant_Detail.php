<?php 
include('conn.php');

error_reporting(E_ALL & ~E_NOTICE);
 $plant_id = $_GET['plant_id'];
 $pro_name = $_GET['pro_name'];

$sql= "SELECT * FROM plant WHERE plant_id = '$plant_id'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style type="text/css">
  .control-label{
    font-weight: bold;
  }
</style>
<body>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-4">
      <h1>Update Plant Detail</h1>
      <form class="form" method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="plant_id" value="<?php echo $row['plant_id'];?>">
        <div class="form-group">
            <label class=" control-label">Plant Name</label>  
            <input name="name" placeholder="NAME" class="form-control input-md" required="" type="text" value="<?php echo $row['name'];?>">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Plant Cost</label>  
            <input name="cost" placeholder="Rs.100000" class="form-control input-md" required="" type="text" value="<?php echo $row['cost'];?>">
          </div>
        
        <div class="form-group">
            <label class=" control-label">Plant Quantity</label>  
            <input name="qty" placeholder="20" class="form-control input-md" required="" type="text" value="<?php echo $row['qty'];?>">
          </div>
		    <div class="form-group">
  			  <label class=" control-label">Description</label>
          <a href="admin_view_planted_detail.php?plant_id=<?php echo $row['plant_id'];?>" class="btn btn-dark" target="_blank">View</a> <?php echo $row['de'];?>
  			  <!-- <textarea class="form-control" rows="5" name="des"></textarea> -->
          <input type="file" name="image" class="form-control">
          <input type="hidden" name="file_name" value="<?php echo $row['de'];?>">
          

        </div>

         <div class="form-group">
            <label class=" control-label">Province</label>  
           
             <select class="form-control" name="province" >
             <option value="<?php echo $row['province'];?>">Province is '<?php echo $row['province'];?>'</option>
             <option>Select Province</option>
             <option value="Punjab">Punjab</option>
             <option value="Sindh">Sindh</option>
             <option value="Balochistan">Balochistan</option>
             <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
           </select>
          </div>

           <div class="form-group">
            <label class=" control-label">District</label>  
           
             <select class="form-control" name="district" >
             <option value="<?php echo $row['district'];?>">District is '<?php echo $row['district'];?>'</option>
             <option>Select district</option>

             <?php 
        $sql = "SELECT * FROM destric"; 
        $re  = mysqli_query($conn,$sql);
        while($r =  mysqli_fetch_assoc($re))
        {

        ?>
        <option value="<?php echo $r['name'];?>|<?php echo $r['prov'];?>"><?php echo $r['name'];?></option>

      <?php } ?>
             
           </select>
          </div>


          <div class="form-group">
            <label class=" control-label">Area Name</label>  
 <input name="area" class="form-control" type="text" value="<?php echo $row['area'];?>">
          </div>

          <div class="form-group">
            <label class=" control-label">Coverage in Persentage</label>  
            <input name="cover" class="form-control"  type="text" value="<?php echo $row['cover'];?>">
          </div>

       

           <div class="form-group">
            <label class=" control-label">Started Date</label>  
           
            <input type="date" class="form-control" name="s_date" value="<?php echo $row['start_date'];?>" >
          </div>

          <div class="form-group">
            <label class=" control-label">Ended Date</label>  
           
          <input type="date" class="form-control" name="e_date" value="<?php echo $row['end_date'];?>" >
          </div>

          <div class="form-group">
            <label class=" control-label">Status</label>  
         
            <select class="form-control" name="status">
          <option value="<?php echo $row['status'];?>">Status is '<?php echo $row['status'];?>'</option>
          <option>Select Status</option>
          <option value="Pending">Pending</option>
          <option value="Started">Started</option>
          <option value="Ended">Ended</option>
          <option value="In Process">In Process</option>
          <option value="Completed">Completed</option>
          <option value="Canceled">Canceled</option>
        </select>
          </div>




        
        <div class="form-group">
            <input  name="Add_Plant" type="submit" value="Update Details"  class="form-control btn btn-primary" >
            <br><br>
            <input type="submit" name="delete" class="form-control btn btn-danger" value="Delete Details">
          </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>     
</body>
</html>
<?php
if (isset($_POST['Add_Plant'])) 
{
  $id   = $_POST['plant_id'];  
	$name = $_POST['name'];
	$cost = $_POST['cost'];
	$quantity = $_POST['qty']; 
  // $province = $_POST['province'];
  // $district = $_POST['district'];
  $district = $_POST['district'];
 $result_explode = explode('|', $district);
 $dis = $result_explode[0];
 // $province   = $result_explode[1];

 // $province = $_POST['province'];

if(empty($province= $result_explode[1]))
{
  $province = $_POST['province'];

}else{
  $province   = $result_explode[1];
}


  $area     = $_POST['area'];
  $cover    = $_POST['cover'];
  $s_date = $_POST['s_date'];
  $e_date = $_POST['e_date'];
  $status = $_POST['status'];

  $folder = "images/".$_FILES['image']['name'];

  // $image   = $_FILES['image']['name'];
	
   if (empty( $image   = $_FILES['image']['name']))
   {
      $image = $_POST['file_name'];
   }
   else
   {
    $image   = $_FILES['image']['name'];
   }

   //UPDATE `plant` SET `plant_id`=[value-1],`name`=[value-2],`cost`=[value-3],`qty`=[value-4],`de`=[value-5],`province`=[value-6],`district`=[value-7],`area`=[value-8],`cover`=[value-9],`start_date`=[value-10],`end_date`=[value-11],`status`=[value-12] WHERE 1

$sql="UPDATE `plant` SET `name`='$name',`cost`='$cost',`qty`='$quantity',`de`='$image',`province`='$province',`district`='$dis',`area`='$area',`cover`='$cover',`start_date`='$s_date',`end_date`='$e_date',`status`='$status' WHERE `plant_id`='$id' ";

       $q=mysqli_query($conn, $sql);
       if ($q)
       {

 
           echo"
           <div class='container'>
             <div class='alert alert-success'>
				<strong>Success!</strong> Data Updated successfully.<br><br>
				<a class='btn btn-primary' href='open_planting_details.php?name=$pro_name'>Goto Back</a>
             </div>
           </div>
             ";
       }
       else
       {
           echo"
           <div class='container'>
             <div class='alert alert-warning'>
                <strong>Warning!</strong> Data Not Updated.
             </div>
           </div>
             ";
       }

    }
    // else
    // {
    //     echo"
    //        <div class='container'>
    //          <div class='alert alert-danger'>
    //             <strong>Danger!</strong> Error DataBase Connection Failed.
    //          </div>
    //        </div>
    //          ";
    // }

    if (isset($_POST['delete']))
    {
      $id   = $_POST['plant_id'];  

      $sql = "DELETE FROM `plant` WHERE plant_id = '$id'";
      $d  = mysqli_query($conn,$sql);

       if ($d)
       {
           echo"
           <div class='container'>
             <div class='alert alert-success'>
        <strong>Success!</strong> Data Deleted successfully.<br><br>
        <a class='btn btn-primary' href='plantRecord-detail.php'>Goto Back</a>
             </div>
           </div>
             ";
       }
       else
       {
           echo"
           <div class='container'>
             <div class='alert alert-warning'>
                <strong>Warning!</strong> Data Not deleted.<br><br>
                <a class='btn btn-primary' href='plantRecord-detail.php'>Goto Back</a>
             </div>
           </div>
             ";
       }



    }


?>
