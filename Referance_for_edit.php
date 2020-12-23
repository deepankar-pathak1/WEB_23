<?php

include 'server.php';
?>

<html>
<head>
<title>EDIT LIST</title>
</head>
<body>

<?php

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysql_query($conn,"SELECT * FROM details WHERE id='$id'");
	$q = mysqli_fetch_array($sql);

}
?>

<form action="" method="POST" target="">
<label for="name">Name:</label>
<input type="text" id="name" value="<?php echo $q['name']; ?>"><br>
<label for="contact">Password:</label>
<input id="contact" type="text" value="<?php echo $q['contact']; ?>"><br>
<label for="email">Repeat Password</label>
<input type="" value="<?php echo $q['email']; ?>">
</body>
</html>
