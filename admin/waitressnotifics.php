<?php


// include('functions/template.php');
//initialization
$name="";
$message="";
$status="";



$id=0;
$edit_state = false;
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');


if (isset($_POST['submit'])) {
 $message=$_POST['message'];
 $q="INSERT INTO notifications (message,status,date) VALUES ('$message', 'unread', CURRENT_TIMESTAMP)";
 $r=mysqli_query($dbc,$q);
 if ($r) {
header('location: waitressnotifics.php');
 }
}


   		//update

   		if (isset($_POST['update'])) {
   			$name=mysqli_real_escape_string($dbc,$_POST['name']);
			$message=mysqli_real_escape_string($dbc,$_POST['message']);
			$status=mysqli_real_escape_string($dbc,$_POST['status']);

			$id=mysqli_real_escape_string($dbc,$_POST['id']);
   			$q="update notifications set name='$name', message='$message', status='$status' where id=$id";
   			mysqli_query($dbc,$q);
   			header('location: waitressnotifics.php');
   		}
   		
   		//fetch records to updated

   		if (isset($_GET['edit'])) {
   			$id = $_GET['edit'];
   			$edit_state = true;
   			$rec=mysqli_query($dbc,"select * from notifications where id = $id");
   			$record=mysqli_fetch_array($rec);
   			$name=$record['name'];
   			$message=$record['message'];
   			$status=$record['status'];
   			$id=$record['id'];
   		}
   		if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from notifications where id = $id");
   			header('location: waitressnotifics.php');
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

<table border="1px" style="width: 800px; line-height: 30px;">
	
	<thead>
		<tr><th colspan="11" style="padding-left: 37%;">VIEW NOTIFICATIONS</th></tr>
		<tr>
			<t>
			<th>Message</th>
			<th>Status</th>
			<th>Date and Time</th>
			<!-- <th></th> -->
			<th colspan="2">action</th>
		</t>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from notifications");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
			
			<td><?php echo $row['message'];?></td>
			<td><?php echo $row['status'];?></td>
						<td><?php echo $row['date'];?></td>

			


			<td><a  class= "edit_btn" href="waitressnotifics.php?edit=<?php echo $row['id'];?>">edit</a></td>
			<td><a class="del_btn" href="waitressnotifics.php?del=<?php echo $row['id'];?>">delete</a></td>
		</tr>

		<?php } ?>
		
	</tbody>
</table>

<form method= "post" action = "waitressnotifics.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	<div class="input-group">
			
		<label>Message:</label>
		<!-- <input type="text"  size="30" name="message" value="<?php echo $message; ?>"> -->
		<select name="message">
			<option value="-1">Select Notification type</option>
			<option>Preparing to cook</option>
			<option>Start cooking</option>
			<option>Finish cooking</option>
			<option>Preparing for delivery</option>
			<option>On the way for delivery</option>
		</select>
	
	</div>
	<div class="input-group">
			
		<label>Status:</label>
		<!-- <input type="text"  size="30" name="status" value="<?php echo $status; ?>"> -->
		<select>
			<option value="-1">Select status</option>
			<option>Unread</option>
		</select>
	
		</div>	
	
			
			<div class="input-group">
			<?php  if ($edit_state == false): ?>
				<button type="submit" class="btn" name="submit">Insert</button>
		    <?php  else: ?>
		    <button type="submit" class="btn" name="update">Update</button>
		    <?php endif ?>
	</div>
	

	

</form>

<footer class="foot">
	<p>copyright &copy : All rights reserved</p>
</footer>
</body>
</html>