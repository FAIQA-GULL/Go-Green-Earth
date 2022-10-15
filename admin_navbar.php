
<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="style.css">
    <style>
        p{
            color:black;
            padding-top: 7px;
            padding-left:10%;
            width: 90%;
         
        }
        .header-below{background-color:green;height:40%;width:80%;border-top:1px solid white;margin-top:3%;}
    </style>
</head>
<body style="color:green;">
    <nav>
        <label class="logo" style="color:red">Dashboard</label>       
        <ul>
            <li><a href="dash.php">Home</a></li>
            <li><a href="message.php">Messages</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
   </nav>
  
 <div class="header-below" style="background-color:#F0F8FF;height:100px;width:100%;border-top:1px solid white; margin-top:0.3px;">

        <a href="add-admin.php"><strong><input type="button"  style="width:290px;height:42px;background-color:#1E90FF; margin-left:160px; margin-top:20px; border-radius: 15px;color:white"value="+ ADD ADMIN" ></strong></a>

        <a href="add-plants.php"><input type="button"  style="width:290px;height:42px;background-color:green; border-radius: 15px; margin-left:20px; color:white"value="+ ADD PLANTS">  </a>

        <a href="add-ditrictProvince.php"><input type="button"  style="width:290px;height:42px;background-color:orange; border-radius: 15px; margin-left:20px; color:white"value="+ ADD DISTRICT/PROVINCE" ></a>

 </div>

<div class="sidebar">
            <label class="side-logo">
                <img src="images/22.png">
            </label>
            <ul>
                <li class="side-list"><a href="dash.php">Admin Records & Details.!</a></li>
                <li class="side-list"><a href="plantRecord-detail.php">Plants Records Details</a></li>
                <li class="side-list"><a href="provinceRecord-detail.php">Add District / Province Record </a></li>
                <li class="side-list"><a href="areaCover-detail.php">Area Covered Details</a></li>
                <li class="side-list"><a href="purshased_tree.php">Purshased Tree Record</a></li>
               
            </ul>


    </div>
   