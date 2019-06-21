<?php
##setup document
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');
//include('functions/sandbox.php');

//include('functions/template.php');

//if($_GET['page'] == ''){
		//$pg = 'home';
	//}else{

		//$pg =  $_GET['page'];
	//}
	//$page_title = get_page_title($dbc,$pg);
	$page_head = get_page_head($dbc);
	$page_contact = get_page_contact($dbc);
	$page_m_p = get_page_m_img($dbc);
	$page_m_btn = get_page_m_btn($dbc);
	$page_abt_title = get_abt_title($dbc);
	$page_abt_h3 = get_abt_h3($dbc);
	$page_abt_p1 = get_abt_p1($dbc);
	$page_abt_p2 = get_abt_p2($dbc);
	//$page_abt_img1 = get_abt_img1($dbc)
	$page_serve_h1 = get_serve_h1($dbc);
	$page_serve_h2 = get_serve_h2($dbc);
	$page_serve_h3 = get_serve_h3($dbc);
	$page_serve_p = get_serve_p($dbc);
	

?>