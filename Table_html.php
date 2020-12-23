<?php

include 'server.php';
?>


<?php
 if (isset($_POST['delete'])){
	 $delete = $_POST['id'];
	$sql = mysqli_query($conn, "DELETE FROM details WHERE id='$delete'");
	 $del = mysqli_fetch_array($sql);
	 
	 
 }


$sql = mysqli_query($conn,"SELECT * FROM details"); // used for selecting all values present in data base



?>


<html>
<head>
<title>TABLE</title>

<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">

<style>
body{margin:100px;}
</style>
</head>

<body>
<div class="container">
<table class="table table-bordered table-striped">
<tr>
<td>NAME</td>
<td>CONTACT NO</td>
<td>EMAIL</td>
<td width="70px">DELETE</td>
<td width="70px">EDIT</td>
</tr>

<?php while($var=$sql->fetch_assoc()){?>
<tr>
<td><?php echo $var['name'] ?></td>;
<td><?php echo $var['contact'] ?></td>;
<td><?php echo $var['email'] ?></td>;
<td><input type='submit' name='delete' value="DELETE" class='btn btn-danger'></td>
<td><a href='table_23_edit.php?id=".$var['id']."' class="btn btn-info">EDIT</a></td>

</tr>
<?php } ?>
</table>
</div>
<body>
</html>




















