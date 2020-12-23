<!DOCTYPE html>
<html lang="en">
<head>
  <title>NEWS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Langar&display=swap" rel="stylesheet">
  
  
  <style>
  body{
	  margin : 90px;
	  padding : 25px 15px;
	  color:green;
	  background-color:black;
	  font-family: 'Langar', cursive;
  }
.button {
  background-color: green;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}

h1 {
  font-weight: bold;

  font-size: 50px;
}

.button2 {
	background-color: green;
    border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:880px;



}
  </style>
</head>
<body>

<div class="container">
  <h1>NEWSPAPER FORM</h1>
  <form action="database.php" method="POST" target="">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="second">Last Name:</label>
      <input type="text" class="form-control" id="second" placeholder="Enter Last Name" name="second">
    </div>
     <div class="form-group">
      <label for="data">Address:</label>
	  <textarea class="form-control" id="data" name="data" rows="5" col="5" placeholder="Please enter address"></textarea>
    </div>
	<div class="form-group">
      <label for="contact">Number:</label>
      <input type="number" class="form-control" id="number" placeholder="How can i call?" name="number">
    </div>
    <button name="submit" class="button" type="submit" class="btn btn-primary">Submit</button>
	<a href="table_news.php" target="_blank" class="button button2">Data</a>
  </form>
</div>

</body>
</html>
