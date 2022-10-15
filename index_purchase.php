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

		
	    <br><br><br><br>


		<table class="table table-bordered">
			<thead>
				<th>Sr.#</th>
				<th>Plant Name</th>				
				<th>Plant Cost</th>
				<th>Quantity</th>
				<th>Total</th>

			</thead>

			<tbody>
				<?php
				$sno=1;
		
        		$query1= "SELECT * FROM pushase_tree ORDER BY tree_id DESC";
        		$result1=mysqli_query($conn,$query1);
        

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
					<td><?php echo $row['tree_name'];?></td>
					<td><?php echo $row['cost'];?></td>
					<td><?php echo $row['qty'];?></td>
					<td><?php echo $row['total'];?></td>
					
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