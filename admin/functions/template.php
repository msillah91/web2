<?php
function head(){
echo '<h1>Aministrative panel</h1>';
}
function nav(){
	echo '<ul>
			<li><a href="admin.php?page=admin">home</a></li>
			<li><a href="menu.php?page=menu">menu</a></li>
			<li><a href="users.php?page=users">users</a></li>


	<div class="nav">
			<li><a href="multlogin.php?page=admin">log Out</a></li>
	</div>
		</ul>';
		
		
}
function footer(){
	echo '<p>Copyright &copy admin 2019</p>';
}
?>