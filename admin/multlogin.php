<?php
$dbc=mysqli_connect('localhost','root','','web2');
if (isset($_POST['login']) && isset($_POST['email'])) {
	$email=$_POST['email'];
   		
   		$password=$_POST['pwd'];
   		$hashed=SHA1($password);
   		 
   		$type=$_POST['type'];
$q="select * from login where password='$hashed' and type='$type' and email='$email'";
$r=mysqli_query($dbc,$q);
while ($row=mysqli_fetch_array($r)) {
	if($row['password']==$hashed && $row['email']==$email && $row['type']=='Admin') {

		header('location: admin.php');
	}
	elseif($row['password']==$hashed && $row['email']==$email && $row['type']=='Waitress') {
	header('location: waitress.php');
}
elseif($row['password']==$hashed  && $row['email']==$email&& $row['type']=='User') {
header('location: orders.php');
}
}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="css/loginStyle.css">
    <script src="js/jquery-3.4.1.min.js"></script>

</head>
<body>
	
          
<div id="login-box" class="login-box">

      <form class="logon-form" action="" name="vform" method="POST">
        
          
          
        <div class="right-box">
          <span class="signinWith">Sign In With <br/> Social Network
          </span>
          <button class="Social facebook" type="button" name="facebook">Facebook</button>
          <button class="Social twitter" type="button" name="twitter">Twitter</button>
          <button class="Social google" onclick="window.location = '<?php echo $loginURL;?>'" type="button" name="google">Google+</button>
        </div>
        <div class="or">
          or
        </div>
     
        <h1>Sign In</h1>
        <div class="login-left">


			<label>User Type</label>
				<select name="type">
				<option value="-1">Select user type</option>
				<option value="admin">Admin</option>
				<option value="waitress">Waitress</option>
				<option value="user">User</option>
				
				</select>
          <input type="email" name="email" placeholder="Email" required/>
        </div>
        <div>
          <input type="password" name="pwd" placeholder="Password" required/>
        </div>
        <div>
          <input type="submit" name="login" value="Log In" />
        </div>
        <p class="message">Not Registered? <a href="register.php">Register</a></p>
      </form>
      
        
      
    </div>


</body>
</html>