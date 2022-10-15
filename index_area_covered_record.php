<?php
include('conn.php');
include('index_navbar.php');

?>

<div class="container">
	<center><h2>Area Covrerd</h2></center>

	<div class="row">
		<form method="post">
		<div class="pull-right" style="display: flex;">
		      <select class="form-control" name="select_pro" required/>
			<option value="">Select Province</option>
			<?php 
			$select="SELECT * FROM `province_record` GROUP BY `pro_name`";
			$sel=mysqli_query($conn,$select);
			while($sele =mysqli_fetch_assoc($sel))
			{
			?>
			    <option value="<?php echo $sele['pro_name'];?>"><?php echo $sele['pro_name'];?></option>
			<?php
			}
			?>
		   </select>

		   
		    <input type="submit" class="btn btn-success" name="filter" value="Search">
	    </div>
		</form>
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
				$sno=1;
		if(isset($_POST['filter']))
			{

			 $select_category = $_POST['select_pro'];
			

			$query1 ="SELECT `pro_name`, `district`, `to_area`, `from_area`, `s_date`, `e_date`, AVG(`percentage`), `status` FROM `province_record` WHERE `pro_name` IN('$select_category','$select_category')  GROUP BY pro_name ORDER BY pro_id DESC  ";
			
			
			
			$result1=mysqli_query($conn,$query1);

			 }
			 else
			{

			  $query1 = "SELECT `pro_name`, `district`, `to_area`, `from_area`, `s_date`, `e_date`, AVG(`percentage`), `status` FROM `province_record` GROUP BY pro_name ORDER BY pro_id DESC ";

			  $result1=mysqli_query($conn,$query1);
			}

			if ($result1)
        		{
        			if(mysqli_num_rows($result1))
        			{
        			//$row basically variable fatch array mean row and colomns
        			while($row=mysqli_fetch_array($result1))
                        {




    ?>

    <tr>
      <?php echo '<th>'.$sno++.'</th>'?>
      <td><?php echo $row['pro_name'];?></td>
      <td><?php echo $row['AVG(`percentage`)'];?>%</td>
      <td><?php echo $row['s_date'];?></td>
      <td><?php echo $row['e_date'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><a href="index_province_record_detail.php?pro_name=<?php echo $row['pro_name'];?>" class="btn btn-success">View</a></td>
    </tr>


                        <?php 
                        } 
                      }
                  }
                ?>
			</tbody>
			
		</table>
	</div>
	
</div>
</body>
</html