<?php
include('config/setup.php');

if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from orders where id = $id");
   			header('location: waitress.php');
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

	
<table border="1px" style="width: 600px; line-height: 30px;">
	
	<thead>
		<tr><th colspan="13" style="padding-left: 40%;">VIEW ORDER RECORDS</th></tr>
		<tr>
			<t>
				<th>CustomerNumer</th>
			<th>CustomerName</th>
			<th>CustomerAddress</th>
			<th>Email</th>
			<th>phone</th>
			<th>Date</th>
			<th>Time</th>
			<th>OrderType</th>
			<th>ItemName</th>
			<th>ItemPrice</th>
			<th>ItemQuantity</th>
			<th>TotalPrice</th>
			<th colspan="2">action</th>
		</t>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from orders");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
								<td><?php echo $row['id'];?></td>

				<td><?php echo $row['customer_name'];?></td>
								<td><?php echo $row['customer_address'];?></td>

				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['phone'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['time'];?></td>
				<td><?php echo $row['order_type'];?></td>
				<td><?php echo $row['item_name'];?></td>
				<td><?php echo $row['item_price'];?></td>

				<td><?php echo $row['item_quantity'];?></td>
				<td><?php echo $row['total_price'];?></td>


			<td><a class="del_btn" href="waitress.php?del=<?php echo $row['id'];?>">delete</a></td>
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

