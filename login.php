<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Street Markets</title>
  <style type="text/css">
    body
    {
      background-color: LightGray;
    }

  </style>


</head >
  <body >
  <div class="container-xl" style="background-color: LightGray;">
    <br/>

  <div class="text-center">
      <br/>
      <br/>
      <br/>
      <br/>
     <form class="form-signin" method="post" >
  <img class="mb-4" src="Street Market FB 2.png" alt="VIT LOGO" width="180" height="102">
  <h1 class="h3 mb-3 font-weight-normal">Login</h1>
 
  <input type="text" name='pids' placeholder="Enrollment No" required>
 <br/>
  <input type="password" name="passw" placeholder="Password" required>
  <br/><br/>
<button type="submit" name="login1" class="btn btn-primary">Login</button>   
</form>
<br/>
<a href="create.php">Create New Account </a>
</div>
</div>


</div>
<?php

function display2()
{
  $servername = "localhost";
  $username = "id11187781_root";
  $password = "12345";
  $dbname = "id11187781_sm";

  // Create connection
  $conn = mysqli_connect($servername, $username,$password, $dbname);
  // Check connection
  if (!$conn) 

  {
      die("Connection failed: " . mysqli_connect_error());
  }

$pid=$_POST['pids'];
$passwords1=$_POST['passw'];
$role1='null1';

  $sqls    = "SELECT role FROM login where id='$pid' and pass='$passwords1'";

            $result = mysqli_query($conn,$sqls) or die(mysql_error());
 
         while ($row    = mysqli_fetch_array($result))
            {

                $role1     = $row['role'];
               
            }
 
 if($role1=='head')
{
  $_SESSION['id1']=$pid;
header('location:home.php');
}
elseif ($role1=='manager')
{
    $_SESSION['id1']=$pid;
    header('location:home.php');
}
elseif ($role1=='staff')
{
    $_SESSION['id1']=$pid;
     header('location:home.php');
}
else
{
 echo "Incorrect ID and Password";
}

 mysqli_close($conn); 
}



if(isset($_POST['login1']))
{
   display2();
} 
          
?>       

  
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
