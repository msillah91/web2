<!-- Google Authentication -->
<?php
  
  $dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');

  

  
  $firstname="";
$lastname="";
$username="";
$email="";
$password="";
$id=0;
$edit_state = false;
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['firstname'])) {
	
	 	$firstname=mysqli_real_escape_string($dbc,$_POST['firstname']);
	 	$lastname=mysqli_real_escape_string($dbc,$_POST['lastname']);
   		$username=mysqli_real_escape_string($dbc,$_POST['username']);

   		$email=mysqli_real_escape_string($dbc,$_POST['email']);
   		
   		$password=mysqli_real_escape_string($dbc,$_POST['password']);
   		
   		$hashed_password = SHA1($password);  
   		
   			$q="insert into login (firstname,lastname,username,email,password) values ('$firstname','$lastname','$username','$email','$hashed_password')";
   			mysqli_query($dbc,$q);
   			header('location: thank.php');
   		}
      
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>SingUp</title>
    <link rel="stylesheet" href="css/loginStyle.css">

  </head>
  <body>
    <div id="login-box" class="login-box">

      <form class="logon-form" action="" name="vform" method="POST">
        <div class="left-box ">
          <h1>Sign Up</h1>
           <div>
            <input type="text" name="firstname" placeholder="Firstname" required/>
          </div>
          <div>
            <input type="text" name="lastname" placeholder="Username" required/>
          </div>
          <div>
            <input type="text" name="username" placeholder="Username" required/>
          </div>
          <div>
            <input type="text" name="email" placeholder="Email" required/>
          </div>
          <div>
            <input type="password" name="password" placeholder="Password" required/>
          </div>
          <div>
            <input type="password" name="confirmation" placeholder="Confirm Password" required/>
          </div>
          <input type="submit" value="Register" class="btn" name="submit"/>
          <p class="message">Already Registered? <a href="multlogin.php">Log In</a></p>
        </div>
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
       
      </form>
       

  </body>
</html>



