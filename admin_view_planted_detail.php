<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>




<?php
include('conn.php');

$plant_id=$_GET['plant_id'];

$query="SELECT de from plant where plant_id='$plant_id'";
$result=mysqli_query($conn,$query);
 $num = mysqli_num_rows($result);
            if($num > 0)
              {
                while($app = mysqli_fetch_array($result))
                {
$file= "images/".$app['de'];

header('Content-type: application/PDF'); 
header('Content-Disposition: inline; filename="'.$file.'"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
readfile($file);  
}
}
?>

</body>
</html>