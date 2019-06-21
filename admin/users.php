
<?php
include('config/setup.php');
include('functions/template.php');

?>

<?php
//initialization
$firstname="";
$lastname="";
$username="";
$email="";
$password="";
$id=0;
$type="";
$edit_state = false;
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');

	

	
	
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['firstname'])) {
	
	 	$firstname=mysqli_real_escape_string($dbc,$_POST['firstname']);
	 	$lastname=mysqli_real_escape_string($dbc,$_POST['lastname']);
   		$username=mysqli_real_escape_string($dbc,$_POST['username']);

   		$email=mysqli_real_escape_string($dbc,$_POST['email']);
   		
   		$password=mysqli_real_escape_string($dbc,$_POST['password']);
   		
   		$hashed_password = SHA1($password);  
   		$type=mysqli_real_escape_string($dbc,$_POST['type']);
   			$q="insert into login (firstname,lastname,username,email,password,type) values ('$firstname','$lastname','$username','$email','$hashed_password','$type')";
   			mysqli_query($dbc,$q);
   			header('location: users.php');
   		}
   		//update

   		if (isset($_POST['update'])) {
   			$firstname=mysqli_real_escape_string($dbc,$_POST['firstname']);
	 		$lastname=mysqli_real_escape_string($dbc,$_POST['lastname']);
   			$username=mysqli_real_escape_string($dbc,$_POST['username']);

   			$email=mysqli_real_escape_string($dbc,$_POST['email']);
   		
   			$password=mysqli_real_escape_string($dbc,$_POST['password']);
   			$hashed = SHA1($password);  
	 		$type=mysqli_real_escape_string($dbc,$_POST['type']);

			$id=mysqli_real_escape_string($dbc,$_POST['id']);
   			$q="update login set firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hashed', type='$type' where id=$id";
   			mysqli_query($dbc,$q);
   			header('location: users.php');
   		}
   		
   		//fetch records to updated

   		if (isset($_GET['edit'])) {
   			$id = $_GET['edit'];
   			$edit_state = true;
   			$rec=mysqli_query($dbc,"select * from login where id = $id");
   			$record=mysqli_fetch_array($rec);
   			$firstname=$record['firstname'];
   			$lastname=$record['lastname'];
   			$username=$record['username'];
   			$email=$record['email'];
   			$password=$record['password'];
   			$type=$record['type'];
   			$id=$record['id'];
   		}
   		if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from login where id = $id");
   			header('location: users.php');
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

<table border="1px" style="width: 800px; line-height: 30px;">
	<thead>
		<tr>
			<t>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Type</th>
			<!--<th></th>-->
			<th colspan="2">action</th>
		</t>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from login");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
			<td><?php echo $row['firstname'];?></td>
			<td><?php echo $row['lastname'];?></td>
			<td><?php echo $row['username'];?></td>

			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['type'];?></td>

				<td><a  class= "edit_btn" href="users.php?edit=<?php echo $row['id'];?>">edit</a></td>
			<td><a class="del_btn" href="users.php?del=<?php echo $row['id'];?>">delete</a></td>
		</tr>

		<?php } ?>
		
	</tbody>
</table>
<div class="frm">
<form method= "post" action = "users.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="input-group">
			
		<label>First:</label>
		<input type="text" name="firstname" value="<?php echo $firstname; ?>"
	
	</div>

	

	<div class="input-group">
			
		<label>Last:</label>
		<input type="text"  name="lastname" value="<?php echo $lastname; ?>"
	
	</div>
	<div class="input-group">
			
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $username; ?>"
	
	</div>
	<div class="input-group">
			
		<label>Email:</label>
		<input type="email"  size="30" name="email" value="<?php echo $email; ?>"
	
	</div>
		<div class="input-group">
			
		<label>Password:</label>
		<input type="password" name="password" value="<?php echo $password; ?>"
	
	</div>	
	
	<div class="input-group">
			<select type="enum" name="type">
				<option value="-1">Select User Type</option>
				<option>Admin</option>
				<option>Waitress</option>
				<option>User</option>
			</select>	</div>
		<!-- <label>Type:</label>
		<input type="enum" name="type" value="<?php echo $type; ?>"
	 -->


			<div class="input-group">
			<?php  if ($edit_state == false): ?>
				<button type="submit" class="btn" name="submit">Insert</button>
		    <?php  else: ?>
		    <button type="submit" class="btn" name="update">Update</button>
		    <?php endif ?>
	</div>
	

	

</form>
</div>
<div class="footer">
		<?php footer(); ?>
	</div>
</body>
</html>

