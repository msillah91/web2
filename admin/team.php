<?php
include('config/setup.php');
include('functions/template.php');
session_start();
if (!isset($_SESSION['username'])) {
	header('location: login.php');
}
?>

<?php
//initialization
$image="";
$pagetitle="";
$text="";
$id=0;
$edit_state = false;
$dbc=mysqli_connect('localhost','root','','practice') or die('could not connect to the database');

	

	
	
if (isset($_POST['submit'])) {
	$target="images/".basename($_FILES['image']['name']);
			$pagetitle=mysqli_real_escape_string($dbc,$_POST['pagetitle']);
	   		$image=$_FILES['image']['name'];
			$text=mysqli_real_escape_string($dbc,$_POST['tm_h2']);
   			$q="insert into team (pagetitle,image,tm_h2) values ('$pagetitle','$image','$text')";
   			mysqli_query($dbc,$q);
   			move_uploaded_file($_FILES['image']['tmp_name'], "images/$target"); 			
   			header('location: team.php');
   		}
   		//update

   		if (isset($_POST['update'])) {
   			$image=$_FILES['image']['name'];
			$pagetitle=mysqli_real_escape_string($dbc,$_POST['pagetitle']);
			$text=mysqli_real_escape_string($dbc,$_POST['tm_h2']);
			$id=mysqli_real_escape_string($dbc,$_POST['id']);
   			$q="update team set image='$image', pagetitle='$pagetitle',tm_h2='$text' where id=$id";
   			mysqli_query($dbc,$q);
   			header('location: team.php');
   		}
   		
   		//fetch records to updated

   		if (isset($_GET['edit'])) {
   			$id = $_GET['edit'];
   			$edit_state = true;
   			$rec=mysqli_query($dbc,"select * from team where id = $id");
   			$record=mysqli_fetch_array($rec);
   			$image=$record['image'];
   			$pagetitle=$record['pagetitle'];
   			$text=$record['tm_h2'];
   			$id=$record['id'];
   		}
   		if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from team where id = $id");
   			header('location: team.php');
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
			<th>PageTitle</th>
			<th>Image</th>
			<th>Names</th>
			<th></th>
			<th colspan="2">action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from team");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
				<td><?php echo $row['pagetitle'];?></td>
				<td><?php echo $row['image'];?></td>
				<td><?php echo $row['tm_h2'];?></td>

			
			<td><a  class= "edit_btn" href="team.php?edit=<?php echo $row['id'];?>">edit</a></td>
			<td><a class="del_btn" href="team.php?del=<?php echo $row['id'];?>">delete</a></td>
		</tr>

		<?php } ?>
		
	</tbody>
</table>
<div class="frm">
<form method= "post" action = "team.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="input-group">
			
		<label>PageTitle:</label>
		<input type="text"  size="30" name="pagetitle" value="<?php echo $pagetitle; ?>"
	
	</div>

	<div class="input-group">
		
				<label>Image:</label>
				<input type="file" name="image" value="<?php echo $image; ?>"
			</div>
	
	<div class="input-group">
			
		<label>Names:</label>
		<input type="text"  size="30" name="tm_h2" value="<?php echo $text; ?>"
	
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

