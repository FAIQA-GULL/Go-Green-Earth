<?php
include('conn.php');
include('index_navbar.php');

?>

<div class="container">
	<center><h2>Plants Modal</h2></center>
	
	<div class="row">
		<?php
		$sno=1;
		$sql = "SELECT * FROM plant_modal ORDER BY p_id DESC";
		$result = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_assoc($result))
			{
				?>
		<div class="col">

			<!-- <h1><?php echo $row['name'];?></h1> -->
			<h3> Modal <?php echo $sno++; ?></h3>
			<div class="row"> 
				<div class="col-sm-4">
					<div class="fakeimg">
						<?php echo "<img src='images/".$row['image']."' height='250px' width='350px'/>"; ?>
						<!-- <img src="pic/money.jpg" height="250px" width="350px"> -->
					</div>
				</div>
				<div class="col-sm-8">
					<h4><b><?php echo $row['name'];?></b></h4>
					<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.quip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			
		</div>	
		<br>
	<?php  } ?>
		
	</div>
	
</div>
</body>
</html>