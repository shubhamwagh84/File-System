<?php
session_start(); 
$a1 = $_SESSION['foldername1'];
$a2 = $_SESSION['foldername2'];
$a3 = $_SESSION['foldername3'];
$b=$a1;

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
<a href="home.php">		    <img src="Street Market FB 2.png" width="140" height="50" alt="VIT LOGO"> </a>
		  
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
<button type='button' class='btn btn-primary mb-2' id='a1' name="answer" onclick ="showDiv1()" >Upload File</button>
<button type='button' style="display:none;" class='btn btn-primary mb-2' id='a2'  onclick ="showDiv2()" name="answer" >close</button>


<div id="welcomeDiv"  style="display:none;" class="answer_list" >
	
<form class="form-inline" method="post" enctype="multipart/form-data">
  <div class="form-group mb-2">
<input type="hidden" class="form-control-file" id="exampleFormControlFile1" name="i11" value="<?php $b ?>" required>
<input type="file" class="form-control-file" id="exampleFormControlFile1" name="i1file" required>
  </div>
  <button type="submit" class="btn btn-primary mb-2" name='done1'>Upload File</button>
</form>

</div>

<script type="text/javascript">

	function showDiv1() {
   document.getElementById('welcomeDiv').style.display = "block";
   document.getElementById('a1').style.display = "none";
   document.getElementById('a2').style.display = "block";
}
	function showDiv2() {
   document.getElementById('welcomeDiv').style.display = "none";
   document.getElementById('a1').style.display = "block";
   document.getElementById('a2').style.display = "none";

}	
</script>
<?php
if(isset($_POST['done1']))
{

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "SM"; 
  	$i1file=$_FILES['i1file']['name'];

  	$target_path1 = "/opt/lampp/htdocs/files/$b/";  
	$target_path1 = $target_path1.''.basename( $_FILES['i1file']['name']);   
	$fname=$_FILES['i1file']['tmp_name'];
		if(move_uploaded_file($fname, $target_path1)) {  
		    echo "";  
		}
		 else
		{  
		    echo "Sorry, file not uploaded, please try again!";  
		}  


	// Create connection
	$conn = mysqli_connect($servername, $username,"", $dbname);
	// Check connection
	if (!$conn) 

	{
	    die("Connection failed: " . mysqli_connect_error());
	}



$sql8 = "INSERT INTO file1 (filename,foldername)
VALUES ('$i1file','$b')";

if (mysqli_query($conn, $sql8)) {
    echo "";
} else {
    echo "Error5: " . $sql8 . "<br>" . mysqli_error($conn);
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


	
$sql= "SELECT * FROM file1 where foldername='$b'";
            	$i=1;
$result = mysqli_query($conn,$sql) or die(mysql_error());
echo "<table class='table table-borderless'>";   
   echo "<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>";    
            while ($row    = mysqli_fetch_array($result))
            {
                $filen=$row['filename'];
                $foldn=$row['foldername'];

if($i==1)
{

echo "<tr>
<td><div class='card'>
    <a href='$a3/$filen' download>
     <img src='a1.jpg' height='50px' width='50px' class='card-img-top' alt='...'>
</a>
 <div class='card-footer'>
<center>
<a href='$a3/$filen' download>
     <small class='text-muted'>$filen </small></center>
</a>
</center>

       <form action='deletefile.php' method='post'>
            <input type='hidden' name='aa11' value='$filen'>
            <input type='hidden' name='aa22' value='$foldn'>
            <button type='submit' name='de11' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>        

    </div>
  </div>
</td>
";

}
else if($i==2)
{

echo "	
<td>
<div class='card'>
   <a href='$a3/$filen' download>
     <img src='a1.jpg' height='50px' width='50px' class='card-img-top' alt='...'>
</a>
<div class='card-footer'>
<center>
<a href='$a3/$filen' download>
     <small class='text-muted'>$filen </small></center>
</a>
</center>
       <form action='deletefile.php' method='post'>
            <input type='hidden' name='aa11' value='$filen'>
            <input type='hidden' name='aa22' value='$foldn'>
            <button type='submit' name='de11' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>        

    </div>
  </div>
</td>
";

}

else if($i==3)
{

echo "
<td>
<div class='card'>
   <a href='$a3/$filen' download>
     <img src='a1.jpg' height='50px' width='50px' class='card-img-top' alt='...'>
</a>
<div class='card-footer'>
<center>
<a href='$a3/$filen' download>
     <small class='text-muted'>$filen </small></center>
</a>
</center>
       <form action='deletefile.php' method='post'>
            <input type='hidden' name='aa11' value='$filen'>
            <input type='hidden' name='aa22' value='$foldn'>
            <button type='submit' name='de11' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>        

    </div>
  </div>

</td>
";

}

else if($i==4)
{

echo "	
<td>
<div class='card'>
   <a href='$a3/$filen' download>
     <img src='a1.jpg' height='50px' width='50px' class='card-img-top' alt='...'>
</a>
<div class='card-footer'>
<center>
<a href='$a3/$filen' download>
     <small class='text-muted'>$filen </small></center>
</a>
</center>
       <form action='deletefile.php' method='post'>
            <input type='hidden' name='aa11' value='$filen'>
            <input type='hidden' name='aa22' value='$foldn'>
            <button type='submit' name='de11' class='btn btn-lg btn-block btn-secondary'>Delete</button>
        </form>        

    </div>
  </div>
</td>
";

}


else if($i==5)
{
echo "	
<td>
<div class='card'>
   <a href='$a3/$filen' download>
     <img src='a1.jpg' height='50px' width='50px' class='card-img-top' alt='...'>
</a>
<div class='card-footer'>
<center>
<a href='$a3/$filen' download>
     <small class='text-muted'>$filen </small></center>
</a>
</center>
       <form action='deletefile.php' method='post'>
            <input type='hidden' name='aa11' value='$filen'>
            <input type='hidden' name='aa22' value='$foldn'>
            <button type='submit' name='de11' class='btn btn-lg btn-block btn-secondary'>Delete</button>
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