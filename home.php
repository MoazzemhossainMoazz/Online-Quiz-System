<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
<div class="container">

	<br><h1 class="text-center text-primary">Moazz Webdeveloper Quiz</h1><br>
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>

<div class="card">

	<h3 class="text-center card-header"> Welcome <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck :) </h3>

</div><br>

<?php

?>

<a href="logout.php" class="btn btn-primary "> LOGOUT </a>

</div>
</body>
</html>
