<?php
session_start();
    $id1=$_SESSION['id1'];

    if($_SESSION['id1']==false)
{
header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<title>StreetMarket</title>
	<style type="text/css">
		
		table {
  table-layout: fixed ;
  width: 100% ;
}
td {
  width: 25% ;

}


	</style>
</head>
<body>
<div class="container-xl" style="background-color: LightGray;">
<br/>
		<nav class="navbar navbar-light bg-light">
		    <img src="Street Market FB 2.png" width="140" height="50" alt="VIT LOGO"> 
		  
		    <ul class="nav justify-content-end">
		  <li class="nav-item">	
		    <a class="nav-link active" href="logout.php">Logout</a>
		  </li>
		</ul>
		</nav>
		<br/>

		<button type="button" class="btn btn-primary">		
		Official Team
		</button>
		<hr/>
<ul class="nav justify-content-end">
		  <li class="nav-item">	
<button type="button" class="btn btn-primary" id='abc22' onclick="showDiv()" >Add New Folder</button>
<script type="text/javascript">
	function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
   document.getElementById('abc22').style.display = "none";	
}
function close11() {
   document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('abc22').style.display = "block";	
}
</script>
		  </li>
		</ul>
<div id="welcomeDiv"  style="display:none;" class="answer_list" >
<form method="post">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="foldername" minlength="13" maxlength="20"  placeholder="Folder Name" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" name="folderd" maxlength="43" minlength="35" placeholder="What is this folder contain" required>
    </div>
      <div class="col">
  <button type="submit" name="sub1" class="btn btn-primary"> Create </button>
<a href="home.php"> <button type="button" id='close1' onclick="close11()" class="btn btn-primary"> Close </button></center></a></form>
</div>
</div>



</div>
<?php
if(isset($_POST['sub1']))
{
$fn=$_POST['foldername'];
$fd=$_POST['folderd'];
$name="files/$fn";
mkdir($name,755);
chmod($name, 0777);
chmod($name,0755);
// Everything for owner, read and execute for owner's group
chmod($name, 750);
echo " <script type='text/javascript'>
windows.alert('
<div class='alert alert-success' width='50px' role='alert'>
  Folder Create Successfully!<br/>
  Folder name : $fn<br/>
  Folder Description : $fd
</div>');
</script>";
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "SM";
  				
	// Create connection
	$conn = mysqli_connect($servername, $username,"", $dbname);
	// Check connection
	if (!$conn) 

	{
	    die("Connection failed: " . mysqli_connect_error());
	}

$sql5 = "INSERT INTO Folder1 (fn,fd, path1,id) VALUES ('$fn','$fd','$name','$id1')";

if (mysqli_query($conn, $sql5)) {
    echo "";
} else {
    echo "Error5: " . $sql5 . "<br>" . mysqli_error($conn);
}

	mysqli_close($conn);

}

?>

<hr/>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "SM";
  				
	// Create connection
	$conn = mysqli_connect($servername, $username,"", $dbname);
	// Check connection
	if (!$conn) 

	{
	    die("Connection failed: " . mysqli_connect_error());
	}

$sql= "SELECT * FROM Folder1 where id='$id1'";
            	$i=1;

            $result = mysqli_query($conn,$sql) or die(mysql_error());
echo "<table class='table table-borderless'>";    
   echo "<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>";    

            while ($row    = mysqli_fetch_array($result))
            {
                $fn1=$row['fn'];
                $fd1=$row['fd'];
                
if($i==1)
{
echo "
<tr>	
  <td>
<div class='container'>
      <div class='card-deck mb-3 text-center'>
        <div class='card mb-4 box-shadow'>
        <div class='card-header'>
		 <center><img src='sm1.png' width='100px' height='100px'></center>
        </div>
  			<div class='card-body'>
            	     <form method='POST' action='page.php'>
			";
$_SESSION['foldername1']=$row['fn'];
 $_SESSION['foldername2']=$row['fd'];
 $_SESSION['foldername3']=$row['path1'];
echo "


  <button type='submit' style='border: none; background-color: white'><h3 class='card-title pricing-card-title'>$fn1</h3>
       </form>    </button>
            <ul class='list-unstyled mt-3 mb-4'>
         	   <li>$fd1</li>
            </ul>
 <form action='delete1.php' method='post'>
          	<input type='hidden' name='abcd1' value='".$row['fn']."'>
			<input type='hidden' name='abcd2' value='".$row['fd']."'>
			<input type='hidden' name='abcd3' value='".$row['path1']."'>
 
            <button type='submit' name='de1' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>        
        </div>
		</div> 
        </td>";
}
else if ($i==2) 
{       
    echo "<td>
     <div class='card mb-4 box-shadow'>
        <div class='card-header'>
		 <center><img src='sm1.png' width='100px' height='100px'></center>
        </div>
  			<div class='card-body'>
            	     <form method='POST' action='page.php'>
			";
$_SESSION['foldername1']=$row['fn'];
 $_SESSION['foldername2']=$row['fd'];
 $_SESSION['foldername3']=$row['path1'];
echo "


  <button type='submit' style='border: none; background-color: white'><h3 class='card-title pricing-card-title'>$fn1</h3>
       </form>    </button>
            <ul class='list-unstyled mt-3 mb-4'>
         	   <li>$fd1</li>
            </ul>
 <form action='delete1.php' method='post'>
          	<input type='hidden' name='abcd1' value='".$row['fn']."'>
			<input type='hidden' name='abcd2' value='".$row['fd']."'>
			<input type='hidden' name='abcd3' value='".$row['path1']."'>
            <button type='submit' name='de1' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>        
        </div>
		</div> 
  	</td>";
}        
else if ($i==3) 
{       
    echo "<td>
     <div class='card mb-4 box-shadow'>
        <div class='card-header'>
		 <center><img src='sm1.png' width='100px' height='100px'></center>
        </div>
  			<div class='card-body'>
            	     <form method='POST' action='page.php'>
			";
$_SESSION['foldername1']=$row['fn'];
 $_SESSION['foldername2']=$row['fd'];
 $_SESSION['foldername3']=$row['path1'];
echo "


  <button type='submit' style='border: none; background-color: white'><h3 class='card-title pricing-card-title'>$fn1</h3>
       </form>    </button>
            <ul class='list-unstyled mt-3 mb-4'>
         	   <li>$fd1</li>
            </ul>
 <form action='delete1.php' method='post'>
          	<input type='hidden' name='abcd1' value='".$row['fn']."'>
			<input type='hidden' name='abcd2' value='".$row['fd']."'>
			<input type='hidden' name='abcd3' value='".$row['path1']."'>
            <button type='submit' name='de1' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>        
        </div>
		</div> 
  	</td>";
}  
else if($i==4)
{        
              echo "<td>
               <div class='card mb-4 box-shadow'>
        <div class='card-header'>
	<center><img src='sm1.png' width='100px' height='100px'></center>
    </div>
  			<div class='card-body'>
  			     <form method='POST' action='page.php'>
			";
$_SESSION['foldername1']=$row['fn'];
 $_SESSION['foldername2']=$row['fd'];
 $_SESSION['foldername3']=$row['path1'];
echo "

  <button type='submit' style='border: none; background-color: white'><h3 class='card-title pricing-card-title'>$fn1</h3>
       </form>    </button>
            <ul class='list-unstyled mt-3 mb-4'>
         	   <li>$fd1</li>
            </ul> 
 <form action='delete1.php' method='post'>
          	<input type='hidden' name='abcd1' value='".$row['fn']."'>
			<input type='hidden' name='abcd2' value='".$row['fd']."'>
			<input type='hidden' name='abcd3' value='".$row['path1']."'>
            <button type='submit' name='de1' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>    
        </div>
		</div> 
   
 </td>
      </tr>";
$i=0;
}
$i=$i+1;	
 }
 echo "</table>";


	mysqli_close($conn);
?>

</div>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>
    

