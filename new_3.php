<?php
include 'config.php';


if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$second = $_POST['second'];
	$data = $_POST['data'];
	$number = $_POST['number'];
	
	$sql = mysqli_query($conn,"insert into newspaper (name,second,data,number) values('$name','$second','$data','$number')");
	
	header('location: inserti.php');
}

?>
