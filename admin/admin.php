
<?php
include('functions/template.php');
//initialization
$header_title1="";
$header_title2="";
$homepage_title="";
$homepage_btn="";


$id=0;
$edit_state = false;
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');
if (isset($_POST['submit'])) {

   			
			$header_title1=mysqli_real_escape_string($dbc,$_POST['header_title1']);
			$header_title2=mysqli_real_escape_string($dbc,$_POST['header_title2']);
			$homepage_title=mysqli_real_escape_string($dbc,$_POST['homepage_title']);
			$homepage_btn=mysqli_real_escape_string($dbc,$_POST['homepage_btn']);

 $q="insert into home (header_title1,header_title2,homepage_title,homepage_btn) values ('$header_title1','$header_title2','$homepage_title','$homepage_btn')";
   			mysqli_query($dbc,$q);
   			
   		
   			header('location: home.php');
   		}
   		//update

   		if (isset($_POST['update'])) {
   			$header_title1=mysqli_real_escape_string($dbc,$_POST['header_title1']);
			$header_title2=mysqli_real_escape_string($dbc,$_POST['header_title2']);
			$homepage_title=mysqli_real_escape_string($dbc,$_POST['homepage_title']);
			$homepage_btn=mysqli_real_escape_string($dbc,$_POST['homepage_btn']);

			$id=mysqli_real_escape_string($dbc,$_POST['id']);
   			$q="update home set header_title1='$header_title1', header_title2='$header_title2', homepage_title='$homepage_title', homepage_btn='$homepage_btn' where id=$id";
   			mysqli_query($dbc,$q);
   			header('location: home.php');
   		}
   		
   		//fetch records to updated

   		if (isset($_GET['edit'])) {
   			$id = $_GET['edit'];
   			$edit_state = true;
   			$rec=mysqli_query($dbc,"select * from home where id = $id");
   			$record=mysqli_fetch_array($rec);
   			$header_title1=$record['header_title1'];
   			$header_title2=$record['header_title2'];
   			$homepage_title=$record['homepage_title'];
   			$homepage_btn=$record['homepage_btn'];
   			$id=$record['id'];
   		}
   		if (isset($_GET['del'])) {
   			$id = $_GET['del'];
   			$edit_state = true;
   			mysqli_query($dbc,"delete from home where id = $id");
   			header('location: home.php');
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
			<th>HeaderTitle1</th>
			<th>HeaderTitle2</th>
			<th>HomepageTitle</th>
			<th>HomepageBtn</th>
			<!-- <th></th> -->
			<th colspan="2">action</th>
		</t>
		</tr>
	</thead>
	<tbody>
		<?php 
		$r=mysqli_query($dbc,"select * from home");
		while ($row=mysqli_fetch_array($r)) { ?>
			<tr>
			<td><?php echo $row['header_title1'];?></td>
			<td><?php echo $row['header_title2'];?></td>
			<td><?php echo $row['homepage_title'];?></td>
			<td><?php echo $row['homepage_btn'];?></td>
			


			<td><a  class= "edit_btn" href="home.php?edit=<?php echo $row['id'];?>">edit</a></td>
			<td><a class="del_btn" href="home.php?del=<?php echo $row['id'];?>">delete</a></td>
		</tr>

		<?php } ?>
		
	</tbody>
</table>
<div class="frm">
<form method= "post" action = "home.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="input-group">
			
		<label>HeaderTitle1:</label>
		<input type="text"  size="30" name="header_title1" value="<?php echo $header_title1; ?>"
	
	</div>
	<div class="input-group">
			
		<label>HeaderTitle2:</label>
		<input type="text"  size="30" name="header_title2" value="<?php echo $header_title2; ?>"
	
	</div>
	<div class="input-group">
			
		<label>HomepageTitle:</label>
		<input type="text"  size="30" name="homepage_title" value="<?php echo $homepage_title; ?>"
	
	</div>
	<div class="input-group">
			
		<label>HomepageBtn:</label>
		<input type="text"  size="30" name="homepage_btn" value="<?php echo $homepage_btn; ?>"
	
	</div>
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