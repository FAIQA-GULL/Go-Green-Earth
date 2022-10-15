<?php
include('conn.php');
include('index_navbar.php');

?>

<style type="text/css">
	.form-control{
		width: 100%;
	}
</style>

<div class="container">
	<center><h2>Planted Tree Report</h2></center>

	<div class="row">

		<form method="post">

		<div class="pull-right" style="display: flex;">
		    <select class="form-control" name="select_pro" required/>
			<option value="">Select startDate</option>
			<?php 
			$select="SELECT * FROM plant GROUP BY district";
			$sel=mysqli_query($conn,$select);
			while($sele =mysqli_fetch_assoc($sel))
			{
			?>
			    <option value="<?php echo $sele['start_date'];?>"><?php echo $sele['start_date'];?></option>
			<?php
			}
			?>
		   </select>


		   <select class="form-control" name="district">
			<option value="">EndDate</option>
			<?php 
			$select="SELECT * FROM plant GROUP BY district";
			$sel=mysqli_query($conn,$select);
			while($sele =mysqli_fetch_assoc($sel))
			{
			?>
			    <option value="<?php echo $sele['end_date'];?>">
			    	<?php echo $sele['end_date'];?></option>
			<?php
			}
			?>
		   </select>
		
		    <input type="submit" class="btn btn-success" name="filter" value="Search">
	    </div>
	</form>

	    <br><br><br><br>


		<table class="table table-bordered">
			<thead>
				<th>Sr.#</th>
				<th>Plant Name</th>
				<th>Quantity</th>
				<th>Plant Cost</th>
				<th>Province</th>
				<th>District</th>
				<th>Area</th>
				<th>Area Cover</th>
				<th>Project Started</th>
				<th>Project Ended</th>
				<th>Project Status</th>
				<th>View Deatil</th>

			</thead>

			<tbody>
				<?php
				$sno=1;
		if(isset($_POST['filter']))
			{

			 $select_category = $_POST['select_pro'];
			 $sub_category    = $_POST['district'];

			 // AND cdate BETWEEN '$startdate' AND '$enddate'

			$query1 ="SELECT * FROM plant WHERE `start_date` AND `end_date` BETWEEN '$select_category' AND '$sub_category'";
			// print_r($query1);
			$result1=mysqli_query($conn,$query1);

			 }
        else
        	{
        		$query1= "SELECT * FROM plant ORDER BY plant_id DESC";
        		$result1=mysqli_query($conn,$query1);
        	}

        	if ($result1)
        		{
        			if(mysqli_num_rows($result1))
        			{
        			//$row basically variable fatch array mean row and coloms
        			while($row=mysqli_fetch_array($result1))
                        {
            ?>

				
				<tr>
					<?php echo  '<th>'.$sno++.'</th>'?>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['qty'];?></td>
					<td><?php echo $row['cost'];?></td>
					<td><?php echo $row['province'];?></td>
					<td><?php echo $row['district'];?></td>
					<td><?php echo $row['area'];?></td>
					<td><?php echo $row['cover'];?></td>
					<td><?php echo $row['start_date'];?></td>
					<td><?php echo $row['end_date'];?></td>
					<td><?php echo $row['status'];?></td>
					<td><a href="index_view_planted_record.php?plant_id=<?php echo $row['plant_id'];?>" class="btn btn-success">View</a></td>
				</tr>
			<?php        }
		            }
		        }
		    ?>
			</tbody>
		</table>
		
	</div>
	
</div>
</body>
</html>