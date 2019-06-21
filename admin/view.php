<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
}

		 .nav {
		
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
  
}

/* Links inside the navbar */
.nav a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}
.nav a:hover {
  background-color: red;
  text-decoration: none;
  
}
.p1{
padding-top: 200px;
text-align: center;
font-size: 50px;
text-transform: uppercase;
}
footer{
	background-color: #333;
	min-height: 12vh;
	color: #fff;
}
.p2{
	margin-top: 460px;
	padding-top: 30px;
text-align: center;
}
p{

}
</style>
</head>
<body>

<div class="nav">
		<a href="usernotifics.php">Go Back</a>
	</div>
<h1>Notifications</h1>

<?php

$con=mysqli_connect('localhost','root','','web2');
$id=$_GET['id'];
$q="update notifications set status='read' where id='$id'";//reload index page to see the changes that is to change text from bold to normal text after visiting the view pages
 $r=mysqli_query($con,$q);
 $q="select * from notifications where id='$id'";
 $r=mysqli_query($con,$q);
 if (mysqli_num_rows($r)>0){
   foreach ($r as $i) {

 echo $i['message'].'<br>'.date('F j,Y. g:i a',strtotime($i['date']));
   }
 }
?>

<footer>
	<p class="p2">&copy, All Rights Resereved</p>
</footer>
</body>
</html>



