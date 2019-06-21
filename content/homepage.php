<?php ##header
function get_page_head1($dbc){

	$q=	"select header_title1 from home  limit 1";
	$r=mysqli_query($dbc,$q);
	$head =mysqli_fetch_assoc($r);
	return $head['header_title1'];
	
	}
function get_page_head2($dbc){

	$q=	"select header_title2 from home  limit 1";
	$r=mysqli_query($dbc,$q);
	$head =mysqli_fetch_assoc($r);
	return $head['header_title2'];
	
	}
	function get_page_title($dbc){

	$q=	"select homepage_title from home  limit 1";
	$r=mysqli_query($dbc,$q);
	$head =mysqli_fetch_assoc($r);
	return $head['homepage_title'];
	
	}
	function get_page_btn($dbc){

	$q=	"select homepage_btn from home  limit 1";
	$r=mysqli_query($dbc,$q);
	$head =mysqli_fetch_assoc($r);
	return $head['homepage_btn'];
	
	}

?>