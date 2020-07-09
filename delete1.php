<?php
session_start();
    $id1=$_SESSION['id1'];

    if($_SESSION['id1']==false)
{
header('Location:login.php');
}

$a=$_POST['abcd1'];
$b=$_POST['abcd2'];
$c=$_POST['abcd3'];

echo "$a <br/>$b <br/>$c <br/>";



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

$sql5 = "DELETE FROM `Folder1` WHERE fn='$a'";

if (mysqli_query($conn, $sql5)) {
    echo "Delete query successfully";
} else {
    echo "Error5: " . $sql5 . "<br>" . mysqli_error($conn);
}

rmdir($c);
	mysqli_close($conn);
header('Location:home.php');
?>