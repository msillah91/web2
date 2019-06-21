<?php
include('config/setup.php');

if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from reservations where id = $id");
   			header('location: reserve.php');
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
		<li><a href="waitressnotifics.php">Notifications</a></li>
<div class="nav">
			<li><a href="multlogin.php?page=admin">log Out</a></li>
	</div>
	</ul>		
	</div>

<table border="1px" style="width: 600px; line-height: 30px;">
	<thead>
		<tr><th colspan="11" style="padding-left: 37%;">RERVATIONS RECORDS</th></tr>
		<tr>
			<t>
			<th>ID</th>
			<th>Attendant</th>
			<th>Email</th>
			<th>phone</th>
			<th>Guest</th>
			<th>Type</th>
			<th>Date</th>
			<th>Time</th>
			<th>Tables</th>
			<th>Message</th>
			<th colspan="2">action</th>
		</t>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from reservations");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
				<td><?php echo $row['id'];?></td>

				<td><?php echo $row['attendant'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['phone'];?></td>
				<td><?php echo $row['guest'];?></td>
				<td><?php echo $row['type'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['time'];?></td>
				<td><?php echo $row['tables'];?></td>
				
				<td><?php echo $row['message'];?></td>
			<td><a class="del_btn" href="reserve.php?del=<?php echo $row['id'];?>">delete</a></td>
	
		</tr>
		<?php } ?>
		
	</tbody>
</table>
<div  class="foot">
<footer>
	<p>copyright &copy : All rights reserved</p>
</footer></div>
</body>
</html>

