
<?php
include('functions/template.php');

$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');

   

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	*{
			margin:0;
			padding:0;
		}
	body{
	font-family: Arial, Helvetica, sans serif;
	overflow-x: hidden;
	 margin: 0;
    padding: 0;
  
   

}
.header{
	min-height: 12vh;
}
.header h1{
	margin-top: 20px;
}
.header{
	padding: 0 30px; 
	background-color: #efefef;
	overflow: hidden;
}
h1{
    color: #baec5b;
    text-align: center;
    font-style: italic;
}
.clear{
	overflow: hidden;
	clear: both;
}

.foot{
	text-align: center;
	margin-top: 415px;
	background-color: #444;
	color: #fff;
	overflow: hidden;
	min-height: 12vh;
}
.foot p{
	margin-top: 30px;
}
footer{
	min-height: 10vh;

}
.nav1{
	float: right;
	margin-top: 0;
	padding-top: 0;

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

/* The dropdown container */
.drop {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.drop .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.nav a:hover, .drop:hover .dropbtn {
  background-color: red;
  text-decoration: none;
}

/* Dropdown content (hidden by default) */
.drop-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.drop-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.drop-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.drop:hover .drop-content {
  display: block;
}

.lftt{
	float: left;

	margin-right: 60px;

}
.lftt,.rghtt{
	padding-top: 160px;


}
.container{
	width: 60%;
	margin:0 auto;

}
	</style>
	<!-- 		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->

	<!-- <link rel="stylesheet" type="text/css" href="css/admin1.css"> -->
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

</head>
<body>

<div class="header">
		<h1>User panel</h1>
	</div>
	<div class="nav">
  <a href="orders.php">order</a>
  <div class="drop">
    <button class="dropbtn">Notifications 
    	<?php
$q="select * from notifications where status='unread' order by date desc";
$r=mysqli_query($dbc,$q);
if (mysqli_num_rows($r)>0){
	?>
<span class="badge badge-light"><?php echo mysqli_num_rows($r);?></span>
<?php
}
?>
    	
    </button>
    <div class="drop-content">
      <?php
      $q="select * from notifications order by date desc";
      $r=mysqli_query($dbc,$q);
if (mysqli_num_rows($r)>0){
  foreach ($r as $i) {
  
  
      ?>
      <a href="view.php?id=<?php echo $i['id'] ?>" style="<?php if($i['status']=='unread'){

 echo "font-weight: bold;";

      }
     
       ?>" href="view.php?id="<?php echo $i['id'] ?>"" >
        
      	<?php echo $i['message'];  ?><br>
      	<small><i><?php echo date('F j,Y. g:i a',strtotime($i['date']));  ?></i></small><br>
      
      </a>
      <!-- <a href="#">Link 2</a>
      <a href="#">Link 3</a> -->
      <?php
    }

  }else{
    echo "no records yet";
  }

    ?>
    </div>
   
  </div>
<div class="nav1">
			<li><a href="multlogin.php?page=admin">log Out</a></li>
	</div>
	</ul>		
	</div>
</div> 
<?php
if (isset($_POST['submit'])) {
 $message=$_POST['message'];
 $q="INSERT INTO notifications (message,status,date) VALUES ('$message', 'unread', CURRENT_TIMESTAMP)";
 $r=mysqli_query($dbc,$q);
 if ($r) {
header('location: index.php');
 }
}

?>
<div class="clear"></div>
<div class="container">
<div class="lftt">
<img class="mySlides" src="images/abt1.jpg" width="300" height="300">
			<img class="mySlides" src="images/about.jpg" width="300" height="300">
			<img class="mySlides" src="images/images.jpg" width="300" height="300">
			<img  class="mySlides" src="images/porage.jpg" width="300" height="300">
			<img class="mySlides" src="images/99-Best-Food-Photography-Tips-3.jpg" width="300" height="300">
		<img class="mySlides" src="images/loginImage.jpg" width="300" height="300">
			</div>	
				<div class="rghtt">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			natat non
			proident, sunt in culpa quiLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			natat non
			proident, sunt in culpa quiLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			natat non
			proident, sunt in culpa qui</p>
		</div></div>
<footer class="foot">
	<p>copyright&copy: All rights reserved</p>
</footer>
<script type="text/javascript">
    var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<script type="text/javascript">
	// location.reload();
</script>
</body>
</html>