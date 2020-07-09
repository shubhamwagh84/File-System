<?php
session_start();
    $id1=$_SESSION['id1'];

    if($_SESSION['id1']==false)
{
header('Location:login.php');
}
$a=$_POST['aa22'];
$b=$_POST['aa11'];
$c='files/'.$a.'/'.$b;
echo "$c";



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

$sql5 = "DELETE FROM `file1` WHERE filename='$b'";

if (mysqli_query($conn, $sql5)) {
    echo "Delete query successfully";
} else {
    echo "Error5: " . $sql5 . "<br>" . mysqli_error($conn);
}
unlink($c);

	mysqli_close($conn);
header('Location:page.php');
?>