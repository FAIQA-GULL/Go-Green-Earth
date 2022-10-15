<?php 
include('conn.php');

$pro_id = $_GET['pro_id'];
$pro_name = $_GET['pro_name'];

$sql= "SELECT * FROM province_record WHERE pro_id = '$pro_id'";
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
<body>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-4">
      <h1>Update Detail</h1>
      <form class="form" method="POST" >

        <input type="hidden" name="pro_id" value="<?php echo $row['pro_id'];?>">

        <div class="form-group">
            <label class=" control-label">Province Name</label>  
            <!-- <input name="name" placeholder="NAME" class="form-control input-md" required="" type="text" value="<?php echo $row['pro_name'];?>"> -->
            <select class="form-control" name="province" >

             <option value="<?php echo $row['pro_name'];?>">Province is '<?php echo $row['pro_name'];?>'</option>
             <option>Select Province</option>
             <option value="Punjab">Punjab</option>
             <option value="Sindh">Sindh</option>
             <option value="Balochistan">Balochistan</option>
             <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
           </select>
          </div>
        
        <div class="form-group">
            <label class=" control-label">District Name</label>  
            <!-- <input name="cost" class="form-control input-md" required="" type="text" value="<?php echo $row['district'];?>"> -->

             <select class="form-control" name="district" >


             <option value="<?php echo $row['district'];?>">District is '<?php echo $row['district'];?>'</option>
             <option>Select district</option>
             <option  style="font-weight: bold;">..........PUNJAB...........</option>
             <option value="Bahawalnagar District">Bahawalnagar District</option>
        <option value="Bahawalpur District">Bahawalpur District</option>
        <option value="Rahim Yar Khan District">Rahim Yar Khan District</option>
        <option value="Dera Ghazi Khan District">Dera Ghazi Khan District</option>
        <option value="Layyah District">Layyah District</option>
        <option value="Muzaffargarh District">Muzaffargarh District</option>
        <option value="Rajanpur District">Rajanpur District</option>
        <option style="font-weight: bold;">............SINDH...........</option>
        <option value="Karachi Central">Karachi Central</option>
        <option value="Karachi East">Karachi East</option>
        <option value="Karachi South">Karachi South</option>
        <option value="Karachi South">Karachi South</option>
        <option value="Malir">Malir</option>
        <option style="font-weight: bold;">...........BALOCHISTAN..........</option>
        <option value="District at a glance Ziarat">District at a glance Ziarat</option>
        <option value="District at a glance Zhob">District at a glance Zhob</option>
        <option value="District at a glance Sibi">District at a glance Sibi</option>
        <option value="District at a glance Quetta">District at a glance Quetta</option>
        <option value="District at a glance Pishin">District at a glance Pishin</option>
        <option style="font-weight: bold;">..........KPK.........</option>
        <option value="Bannu District">Bannu District</option>
        <option value="Lakki Marwat">Lakki Marwat </option>
        <option value="District North Waziristan District">District North Waziristan District</option>
           </select>
          </div>
        
        <div class="form-group">
            <label class=" control-label">Tehsil cover <b>FROM</b></label>  
            <input name="from" placeholder="20" class="form-control input-md" required="" type="text" value="<?php echo $row['from_area'];?>">
          </div>
		    <div class="form-group">
  			   <label class=" control-label">Tehsil cover <b>TO</b></label>
              <input name="to" placeholder="20" class="form-control input-md" required="" type="text" value="<?php echo $row['to_area'];?>">  
         
        </div>

         <div class="form-group">
            <label class=" control-label">Persentage</label>  
            <input name="persentage" placeholder="20" class="form-control input-md" required="" type="text" value="<?php echo $row['percentage'];?>">
             
          </div>

           

           <div class="form-group">
            <label class=" control-label">Started Date</label>  
            <input type="date" class="form-control input-md" name="s_date" value="<?php echo $row['s_date'];?>" >
          </div>

          <div class="form-group">
            <label class=" control-label">Ended Date</label>  
          <input type="date" class="form-control input-md" name="e_date" value="<?php echo $row['e_date'];?>" >
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
            <input  name="Update" type="submit" value="Update Details"  class="form-control btn btn-primary" >
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
if (isset($_POST['Update'])) 
{
  $id   = $_POST['pro_id'];  
	// $name = $_POST['province'];
	// $cost = $_POST['cost'];
	// $quantity = $_POST['qty']; 
  $province = $_POST['province'];
  $district = $_POST['district'];
  $from     = $_POST['from'];
  $to       = $_POST['to'];
  $per      = $_POST['persentage'];
  $s_date = $_POST['s_date'];
  $e_date = $_POST['e_date'];
  $status = $_POST['status'];
	
   

   //UPDATE `province_record` SET `pro_id`=[value-1],`pro_name`=[value-2],`district`=[value-3],`to_area`=[value-4],`from_area`=[value-5],`s_date`=[value-6],`e_date`=[value-7],`percentage`=[value-8],`status`=[value-9] WHERE 1

$sql="UPDATE `province_record` SET `pro_name`='$province',`district`='$district',`to_area`='$to',`from_area`='$from',`s_date`='$s_date',`e_date`='$e_date',`percentage`='$per',`status`='$status' WHERE `pro_id`='$id' ";
       $q=mysqli_query($conn, $sql);
       if ($q)
       {
           echo"
           <div class='container'>
             <div class='alert alert-success'>
				<strong>Success!</strong> Data Updated successfully.<br><br>
				<a class='btn btn-primary' href='province_record_detail.php?pro_name=$pro_name'>Goto Back</a>
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
      $id   = $_POST['pro_id'];  

      $sql = "DELETE FROM `province_record` WHERE pro_id = '$id'";
      $d  = mysqli_query($conn,$sql);

       if ($d)
       {
           echo"
           <div class='container'>
             <div class='alert alert-success'>
        <strong>Success!</strong> Data Deleted successfully.<br><br>
        <a class='btn btn-primary' href='province_record_detail.php?pro_name=$pro_name'>Goto Back</a>
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
