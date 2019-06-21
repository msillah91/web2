<?php
$dbc=mysqli_connect('localhost','root','','web2');
if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type'])) {
	$type=$_POST['type'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];

	$q="select * from usersss where email='$email' and password='$password' and type='$type'";
	$r=mysqli_query($q);
	while ($row=mysqli_fetch_array($r)) {
	if ($row['email']==$email  && $row['password']==$password && $row['type']=='Admin') {

		header('location: admin.php');
	}elseif($row['email']==$email  && $row['password']==$password && $row['type']=='Waitress') {
	header('location: waitress.php');
}elseif($row['email']==$email  && $row['password']==$password && $row['type']=='User') {
header('location: orders.php');
}
}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<select>
		<option value="-1">select user</option>
		<option>Admin</option>
				<option>Waitress</option>

		<option>User</option>

	</select>
	<input type="email" name="email">
	<input type="password" name="pwd">
	<input type="submit" name="submit" value="login">
</form>
</body>
</html>