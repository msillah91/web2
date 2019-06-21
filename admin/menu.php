<?php
include('config/setup.php');
include('functions/template.php');


?>

<?php
//initialization
$image="";
$title="";
$desc="";
$price="";
$id=0;
$edit_state = false;
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');

	

	
	
if (isset($_POST['submit'])) {

		$target="images/".basename($_FILES['image']['name']);
		$image=$_FILES['image']['name'];
	 	$title=mysqli_real_escape_string($dbc,$_POST['title']);
	 	$desc=mysqli_real_escape_string($dbc,$_POST['description']);
		$price=mysqli_real_escape_string($dbc,$_POST['price']);
   		

   			$q="insert into menu (image,title,description,price) values ('$image','$title','$desc','$price')";
   			mysqli_query($dbc,$q);
   			move_uploaded_file($_FILES['image']['tmp_name'], "images/$target");
   			
   		
   			header('location: menu.php');
   		}
   		//update

   		if (isset($_POST['update'])) {
   			$image=$_FILES['image']['name'];
			$title=mysqli_real_escape_string($dbc,$_POST['title']);
			$desc=mysqli_real_escape_string($dbc,$_POST['description']);
			$price=mysqli_real_escape_string($dbc,$_POST['price']);
			$id=mysqli_real_escape_string($dbc,$_POST['id']);
   			$q="update menu set image='$image', title='$title', description='$desc', price='$price' where id=$id";
   			mysqli_query($dbc,$q);
   			header('location: menu.php');
   		}
   		
   		//fetch records to updated

   		if (isset($_GET['edit'])) {
   			$id = $_GET['edit'];
   			$edit_state = true;
   			$rec=mysqli_query($dbc,"select * from menu where id = $id");
   			$record=mysqli_fetch_array($rec);
   			$image=$record['image'];
   			$title=$record['title'];
   			$desc=$record['description'];
   			$price=$record['price'];

   			$id=$record['id'];
   		}
   		if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from menu where id = $id");
   			header('location: menu.php');
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
			<th>Image</th>
			<th>Title</th>
			<th>Description</th>
			<th>price</th>
			<!-- <th></th> -->
			<th colspan="2">action</th>
		</t>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from menu");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
				<td><?php echo $row['image'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['price'];?></td>
			
			
			<td><a  class= "edit_btn" href="menu.php?edit=<?php echo $row['id'];?>">edit</a></td>
			<td><a class="del_btn" href="menu.php?del=<?php echo $row['id'];?>">delete</a></td>
		</tr>

		<?php } ?>
		
	</tbody>
</table>
<div class="frm">
<form method= "post" action = "menu.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	<div class="input-group">
		
				<label>Image:</label>
				<input type="file" name="image" value="<?php echo $image; ?>">
			</div>
	
	<div class="input-group">
			
		<label>PageTitle:</label>
		<input type="text"  size="30" name="title" value="<?php echo $title; ?>">
	
	</div>
	<div class="input-group">
			
		<label>Description:</label>
		<input type="text"  size="30" name="description" value="<?php echo $desc; ?>">
	
	</div>

<div class="input-group">
			
		<label>price:</label>
		<input type="text"  size="30" name="price" value="<?php echo $price; ?>">
	
	</div>


			
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
