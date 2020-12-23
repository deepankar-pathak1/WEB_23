<?php

include 'config.php';



if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysqli_query($conn,"DELETE FROM newspaper WHERE id='$id'");
}



$sql = mysqli_query($conn,"SELECT * FROM newspaper");

?>


<html>
<head>
<title>Table
</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">
  
<style>

body{
	  margin : 90px;
	  padding : 25px 15px;
	  color:green;
	  background-color:white;
	  font-family: 'Langar', cursive;
  }

</style>
  
  
</head>

<body>
<form method="POST" action="">
<h2>Data of all users</h2>

<table class="table table-bordered table-striped">

<tr>
<td>Name</td>
<td>Last Name</td>
<td>Address</td>
<td>Number</td>

<td width="70px">Delete</td>
<td width="70px">Edit</td>
</tr>

<?php while($var=$sql->fetch_assoc()){?>
<tr>
<td><?php echo $var['name'] ?></td>;
<td><?php echo $var['second'] ?></td>;
<td><?php echo $var['data'] ?></td>;
<td><?php echo $var['number'] ?></td>;

<td><a href="table_news.php?id=<?php echo $var['id']?>" class='btn btn-danger'>Delete</a></td>
<td><a href='table_23_edit.php?id=".$var['id']."' class="btn btn-info">EDIT</a></td>

</tr>
<?php } ?>



</table>

</body>
</form>
</html>
