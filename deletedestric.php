<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
    $conn = mysqli_connect("localhost","root","","mc190406567");
    if ($conn)
    {  
         $id = $_GET['user'];
         $d="DELETE FROM destric WHERE name='$id' ";
         $del=mysqli_query($conn, $d);
        if($d)
        {
            echo"
            <div class='container'>
              <div class='alert alert-success'>
                 <strong>Success!</strong> Destric Deleted successfully.<br><br>
                 <a class='btn btn-primary' href='dash.php'>Goto Dashboard</a>
              </div>
            </div>
              ";
    
        }
        else {
          echo"
          <div class='container'>
            <div class='alert alert-danger'>
               <strong>Danger!</strong> Error Data Not Deleted.
            </div>
          </div>
            ";
        }
        
      }
      ?>
