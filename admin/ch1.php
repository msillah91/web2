<!-- <?php
include('functions/template.php');
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');


if (isset($_POST['submit'])) {
 $message=$_POST['message'];
 $q="INSERT INTO notifications (message,status,date) VALUES ('$message', 'unread', CURRENT_TIMESTAMP)";
 $r=mysqli_query($dbc,$q);
 if ($r) {
header('location: waitressnotifics.php');
 }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="css/admin1.css">
</head>
<body>

<div class="header">
		<h1>Waitress panel</h1>
	</div>
	<div class="nav_main">
	<ul>
		<li><a href="waitress.php">orders</a></li>
		<li><a href="reserve.php">Reservations</a></li>
		<li><a href="waitressnotifics.php">Notications</a></li>
<div class="nav">
			<li><a href="multlogin.php?page=admin">log Out</a></li>
	</div>
	</ul>		
	</div>


<div class="frm">
<form method= "post" action = "waitressnotifics.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	<div class="input-group">
			
		<label>Order Status:</label>
		
	<input type="text" name="message" required>

		</div>	
	
			<input class="btn" type="submit" name="submit" value="Submit">
			
	</div>
	

	

</form>
</div>
<footer class="foot">
	<p>copyright &copy : All rights reserved</p>
</footer>
</body>
</html> -->