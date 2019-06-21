<?php
include('config/setup.php');

include('functions/template.php');

if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from contacts where id = $id");
   			header('location: contacts.php');
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
		<?php head(); ?>
	</div>
	<div class="nav_main">
		<?php nav(); ?>
		
	</div>

<table class="tab1">
	<thead>
		<tr>
			<th>Name</th>
			<th>email</th>
			<th>phone</th>
			<th>Message</th>
			<th colspan="2">action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from contacts");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['phone'];?></td>
				<td><?php echo $row['message'];?></td>
			<td><a class="del_btn" href="contacts.php?del=<?php echo $row['id'];?>">delete</a></td>
		</tr>
		<?php } ?>
		
	</tbody>
</table>
<div class="footer">
		<?php footer(); ?>
	</div>
</body>
</html>
