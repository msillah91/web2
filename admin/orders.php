
<?php
include('functions/template.php');
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');
if (isset($_POST['order-btn'])) {

   			
			$name=mysqli_real_escape_string($dbc,$_POST['customer_name']);
			$address=mysqli_real_escape_string($dbc,$_POST['customer_address']);
			$email=mysqli_real_escape_string($dbc,$_POST['email']);
			$phone=mysqli_real_escape_string($dbc,$_POST['phone']);
			$date=mysqli_real_escape_string($dbc,$_POST['date']);
			$time=mysqli_real_escape_string($dbc,$_POST['time']);
			$type=mysqli_real_escape_string($dbc,$_POST['order_type']);
			$itemName=mysqli_real_escape_string($dbc,$_POST['item_name']);
			$price=mysqli_real_escape_string($dbc,$_POST['item_price']);
			$quantity=mysqli_real_escape_string($dbc,$_POST['item_quantity']);
			$total=mysqli_real_escape_string($dbc,$_POST['total_price']);

 $q="insert into orders (customer_name,customer_address,email,phone,date,time,order_type,item_name,item_price,item_quantity,total_price) values ('$name','$address','$email','$phone','$date','$time','$type','$itemName','$price','$quantity','$total')";
   			mysqli_query($dbc,$q);
   			
   		
   			header('location: orders.php');
   		}
   		
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<div class="header">
		<h1>Users panel</h1>
	</div>
	

	<div class="nav_main">
	<ul>
		<li><a href="orders.php">order</a></li>
		<li><a href="usernotifics.php">Notications</a></li>
<div class="nav">
			<li><a href="multlogin.php?page=admin">log Out</a></li>
	</div>
	</ul>		
	</div>
	<!-- <div class="hd"><h2>ORDER A MEAL</h2></div> -->

<div class="left-box ">
<div class="frm">
<form class="order-form" id="form1" method= "post" action = "orders.php" onsubmit="return validate()" name="vform" enctype="multipart/form-data">
	<input type="hidden" name="id" value="10000">
			
		<label>customerName:</label>
		<input type="text"  name="customer_name">
			
		<label>CustomerAddress:</label>
		<input type="text" name="customer_address">
	<div class="input-group">
			
		<label>Email:</label>
		<input type="email" name="email" >
	
	<div class="input-group">
			
		<label>Phone:</label>
		<input type="phone" name="phone" >
	<div class="input-group">
			
		<label>Date:</label>
		<input type="date" name="date">
			
		<label>Time:</label>
		<input type="time" name="time" >
	
				
		<label>OrdetType:</label>
<select name="order_type">
	<option>dine in</option>
	<option>take away</option>
	<option>delivery</option>
</select>	
	</div>
			
		<label>ItemName:</label>
		<input type="text" name="item_name" >
	
	
			
		<label>ItemPrice:</label>
		<input type="text" name="item_price"
	
			
		<label>ItemQuatity:</label>
		<input type="number" name="item_quantity" 
	
	
			
		<label>TatalPrice:</label>
		<input type="text" name="total_price">
	</div>
            </div>
            <input type="submit" value="Place Order" class="btn" name="order-btn"/>
        </div>
	

</form>
</div>



</body>
</html>