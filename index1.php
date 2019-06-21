<?php
$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');
include('functions/sandbox.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Our Website 1</title>
	<meta charset="utf-8">
	<meta name = "viewport" content = "Width=device-width">
	<link rel="stylesheet" type="text/css" href="css1/style3.css">
	<link rel="stylesheet" type="text/css" href="css1/lightbox.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			$(".scroll").click(function(event){
				event.preventDefault();
				$("html,body").animate({scrollTop: $(this.hash).offset().top},1000);			
			});
		});
	</script>
	
</head>
<body>
	<header>
		<a href="" id="header"></a>
		<div class = "container">
			<div class="icon">
			<i></i>
			<i></i>
			<i></i>
		</div>
		<div class = "top-h1"><h1 class = "brand"><span class="blk"><?php echo $page_head1;?></span><span class = "orange"><?php echo $page_head2?></span></h1></div>
		<nav>
			<div class="nav">
			<ul>
				<li><a href="#home" class = "scroll">Home</a></li>
				<li><a href="#about" class = "scroll">About</a></li>
					<li><a href="#menu" class="scroll">Menu</a></li>
					
				<li><a href="#team" class = "scroll">Staffs</a></li>   

				<li><a href="#services" class = "scroll">Services</a></li>
				<li><a href="#reservation" class = "scroll">Reservation</a></li>
				</ul>
</div>
			
		</nav>
	</div>

</header>
	<section id = "main">
		<div class = "container1">
		
	<h1><?php echo $page_title;?></h1>
	
	<a class="button-1 btn btn2"  href="#menu" ><?php echo $page_btn;?></a>

	

		
	</section>


	<a href="" id = "about"></a>
	<section id = "main-article">
		<div class = "container2">
			<h1>About Us</h1>
			<img class="mySlides" src="images/abt1.jpg" width="300" height="300">
			<img class="mySlides" src="images/about.jpg" width="300" height="300">
			<img class="mySlides" src="images/images.jpg" width="300" height="300">
			<img  class="mySlides" src="images/porage.jpg" width="300" height="300">
			<img class="mySlides" src="images/99-Best-Food-Photography-Tips-3.jpg" width="300" height="300">
			<img class="mySlides" src="images/loginImage.jpg" width="300" height="300">
			
				<div class="about-p">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			natat non
			proident, sunt in culpa qui</p></div>
		</div>
	</section>
	<section class="gallary" id = "menu">
		<div class = "container3">
			<h1>Our Menu</h1>
			<div class="clear">
			<h3>STARTERS</h3>
		</div>
			<div class="lft">
				<div class="items">
		<a class="" href="images/<?php echo $page_img1;?>"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img1;?>" class="item-img" width="270" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title1;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p><?php echo $page_desc1;?>
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price1;?></h4>
		</div>
	</div>
			
	
		<div class="rght">
				<div class="items">
		<a class="" href="images/<?php echo $page_img2;?>.jpg"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img2;?>" class="item-img" width="300" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title2;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p><?php echo $page_desc2;?>
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price2;?></h4>
		</div>
	</div>
			
			<div class="lft">
				<div class="items">
		<a class="" href="images/<?php echo $page_img3;?>"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img3;?>" class="item-img" width="270" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title3;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p><?php echo $page_desc3;?>
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price3;?></h4>
		</div>
	</div>
	
			<div class="rght">
				<div class="items">
		<a class="" href="images/<?php echo $page_img4;?>"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img4;?>" class="item-img" width="300" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title4;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p>Warm vegetable soup served with a sweat delicious meals such as
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price4;?></h4>
		</div>
	</div>
			<div class="clear"><hr></div>
			
			<div class="clear">
			<h3>MAINS</h3>
		</div>
			<div class="lft">
				<div class="items">
		<a class="" href="images/<?php echo $page_img5;?>"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img5;?>" class="item-img" width="270" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title5;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p><?php echo $page_desc5;?>
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price5;?></h4>
		</div>
	</div>
	
			<div class="rght">
				<div class="items">
		<a class="" href="images/<?php echo $page_img6;?>"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img6;?>" class="item-img" width="300" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title6;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p><?php echo $page_desc6;?>
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price6;?></h4>
		</div>
	</div>
			<div class="lft">
				<div class="items">
		<a class="" href="images/<?php echo $page_img7;?>"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img7;?>" class="item-img" width="270" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title7;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p><?php echo $page_desc7?>
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price7;?></h4>
		</div>
	</div>
	
			<div class="rght">
				<div class="items">
		<a class="" href="images/<?php echo $page_img8;?>"  data-lightbox="example-set" data-title="">
		<img src="images/<?php echo $page_img8;?>" class="item-img" width="300" height="200">
		   </a> 
		   <div class="itm-dsc">
		<h2><?php echo $page_title8;?></h2>
		<a href="admin/multlogin.php">click to order</a>
		</div>
		
			<em><p><?php echo $page_desc8;?>
		<div class="rw-words rw-words-1">
            <span></span>
            <span>fresh homemade bread</span>
            <span>fresh homemade eggs</span>
            <span>fresh homemade chichens</span>
            <span>fresh homemade spices</span>
            
        </div>
    		</p></em><br>
			<h4><?php echo $page_price8;?></h4>
		</div>
	</div>
			
      
			
	</section>



	
	<section id = "main-team">
		<a href="" id= "team"></a>
		<div class ="container">
		<h1 id = "mh1">Our Team</h1>
		<div class = "imgs">
		<img src="images/chef1.jpg" width="170px" height="170px">
		<h1>michael</h1>
		<p>Cheff</p>
		</div>
		<div class = "imgs">
		<img src="images/chef2.jpg" width="170px" height="170px">
		<h1>johnson</h1>
		<p>Manager</p>
		</div>
		<div class = "imgs">
		<img src="images/chef3.jpg" width="170px" height="170px">
		<h1>corbin</h1>
		<p>Cheff</p>
		</div>
		<div class = "imgs">
		<img src="images/chef4.jpg" width="170px" height="170px">
		<h1>ferdan</h1>
		<p>Cheff</p>
		</div>
		</div>
		
	</section>
	<section id ="columns">
		<a href=""  id = "services"></a>
		<div class = "container4">
			<h1>Services</h1>
			<div class = column>
				<div class="b1">
				<img src="images/abt3.jpg" width="284" height="170">
				<h2 class = "col-heading">Cattering</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco </p></div>
		</div>

		<div class = "column">
			<div class="b2">
			<img src="images/abt2.jpg" width="284" height="170">
			<h2 class = "col-heading">Food Serving</h2>
				<p>in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
		</div>
		<div class = "column">
			<div class="b3">
			<img src="images/abt1.jpg" width="284" height="170">
			<h2 class = "col-heading">Drink Serving</h2>
				<p>in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
		</div>
			
			
		</div>
		
	</section>
	<section id ="reservation">
		
		<div class = "container">
			<h1>Reservation</h1>
			<?php  


if (isset($_POST['submit']) && isset($_POST['time']) && isset($_POST['phone']) && isset($_POST['guest']) && isset($_POST['type']) && isset($_POST['tables'])) {


		$dbc=mysqli_connect('localhost','root','','web2') or die('could not connect to the database');
		$name=mysqli_real_escape_string($dbc,$_POST['attendant']);
		$email=mysqli_real_escape_string($dbc,$_POST['email']);
		$guest=	mysqli_real_escape_string($dbc,$_POST['guest']);
		$type=	mysqli_real_escape_string($dbc,$_POST['type']);
		$date=mysqli_real_escape_string($dbc,$_POST['date']);
		$time=	mysqli_real_escape_string($dbc,$_POST['time']);
		$tables=mysqli_real_escape_string($dbc,$_POST['tables']);
		$phone=$_POST['phone'];
		$message=mysqli_real_escape_string($dbc,$_POST['message']);
		$q="insert into reservations (attendant,email,guest,type,date,time,tables,phone,message) 
		values ('$name','$email','$guest','$type','$date','$time','$tables','$phone','$message')";
		mysqli_query($dbc,$q);
}



		?>
			<div class="reserve">
			<form method="post" action="index1.php">
			<input type="hidden" name="size" value="1000000">
			<label class="bld">Name</label>
			<input class="mn1"  type="text" name="attendant" placeholder="Name"><br>
			<label class="bld">Email</label>
			<input class="mn1"  type="email" name="email" placeholder="Email"><br>
			<label class="bld">Guest</label>
			<input class="mn1"  type="text" name="guest" placeholder="Number Of Guest"><br>
			<label class="bld">Reservation Type</label>
			<select class="mn1"  name="type">
				<option value="-1">Reservation Type</option>
				<option>Dinner</option>
				<option>Birthday</option>
				<option>Anniversary</option>
				<option>Private</option>
				<option>Launch</option>
				<option>others</option>
				</select><br><br>
				<label class="bld">Date</label>
			<input class="mn1"  type="date" name="date" placeholder="type date"><br><br>
			<label class="bld">Time</label>
			<input class="mn1"  type="time" name="time" placeholder="type time"><br><br>
			<label class="bld">Table</label>
			<input type="number" name="tables" placeholder="Number Of Tables"><br>
				
			<label class="bld">Phone</label>
			<input type="phone" name="phone" placeholder="Phone"><br>
			
			<label class="bld">Any special Request?</label><br>
			<textarea name="message" placeholder="Message" value='Message'></textarea><br>
			<button class="button-1 btn btn1" name="submit">Submit Booking</button><br>
		</form>
			</div>
			<div id="map"><iframe class="map1"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62095.880175608814!2d-16.764575073193402!3d13.412790581507293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ec8bbeaef705e10!2sThe+Cave+Restaurant!5e0!3m2!1sen!2sgm!4v1556922777158!5m2!1sen!2sgm" width="350" height="600" frameborder="0" style="border:2px solid black;
			margin-left: 23%; margin-top: 60px;" allowfullscreen></iframe></div>
	
		</div>
	</section>
		
	
	<section id = "abv-footer">
		<div class = "container">
			<div class = "lst-contents1">
				<h1 class = "main-head">Info</h1>
				<h2>Opening Hour</h2>
			<div><p>Mon-Sat:10am-10pm.
			</p></div>
			<div><p>Sun:3pm-12pm
			</p></div>
			
		</div>
		<div class = "lst-contents">
				<h1 class = "main-head">LOCATION</h1>
			<div><p>267 street</p></div>
			<div><p>SereKunda
			</p></div>
			<div><p>Lorem ipsum 
			</p></div>
			<div><p>Lorem ipsum 
			</p></div>
		</div>
		<div class = "lst-contents2">
				<h1 class = "main-head">Pages</h1>
			<ul>
				<li><a href="#header" class = "scroll">Home</a></li>
				<li><a href="#about" class = "scroll">About Us</a></li>
					<li><a href="#menu" class="scroll">Menu</a></li>
				<li><a href="#team" class = "scroll">Staffs</a></li>   

				<li><a href="#services" class = "scroll">Services</a></li>
				<li><a href="#reservation" class = "scroll">Reservation</a></li>
			
			</ul>
		</div>
		<div class = "lst-contents">
				<h1 class = "main-head">Contact Us</h1>
				<h2>Email</h2>
			<div><p>bubasemail@gmail.com</p></div>
			<h2>Phone</h2>
			<div><p>6523628871/4776735511</p></div>
		
			
			</p>
			<a class="bt2" href="admin/multlogin.php" class="btn main-btn my-4 text-capitalize lgin-btn">Sign In</a>
		</div>
		</div>
		</div>
	</section>
	<a href="#header" id = "toTop" style = "display: block;"><span id = "toTopHover" style="opacity:1"></span></a>
	<footer id = "footer">                                        
		<div class = "container">
		<p title = "this is the footer of the page">&copy; 2017 Corporate Bank. All rights reserved | Design by Our Team</p>
		</div>
	</footer>
			<script src="js/canvas1.js"></script>

		<script src="js/canvas2.js"></script>

	<script type="text/javascript">

		jQuery(document).ready(function(){
			$(".icon").click(function(){
				$(".nav ul").slideToggle();			
			});
		});
	</script>
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src = "js/easing.js" ></script>
<script type="text/javascript" src = "js/move-top.js" ></script>


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
		jQuery(document).ready(function(){
			$().UItoTop({easingType: "easeOutElastic"});
		});
	</script>
<script type="text/javascript"></script>
<script type="text/javascript">
		jQuery(document).ready(function(){
			$("#toTop").click(function(){
				$("html,body").animate({scrollTop: $(this.hash).offset().top},1000);			
			});
		});
	</script>
</body>
</html>