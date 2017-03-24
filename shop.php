<?php
//Start session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Strom Products, Strom Control Systems, STCS, Strom Website, Strom Electronics, Electronics Store Zambia">
    <meta name="author" content="STROM">
    <title>Shop | StCS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +260 962 782403</a></li>
								<li><a href="mailto: stromcs@outlook.com"><i class="fa fa-envelope"></i> stromcs@outlook.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href="stromcs.sales@outlook.com"><i class="fa fa-skype"></i></a></li><!-- skype -->
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.jpg" alt="StCS logo" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" id="headingnavbar">
								<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Browse our Shop </a></li>
								<li><a href="about.html"><i class="fa fa-star"></i> About Us </a></li>
								<li><a href="contact-us.html"><i class="fa fa-pencil-square-o"></i> Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown"><a href="shop.php">Shop</li></a>
								<li class="dropdown"><a>About<i class="fa fa-angle-down"></a></i>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
										<li><a href="contact-us.html">Our Contacts</a></li>
                                    </ul>
                                </li> 
								<li><a href="mailto: stromcs@outlook.com">Talk to Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search for electronics, switches, etc"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 id="cats">Categories</h2>
					
					</div>
				</div>
				
<!-- All Products -->
				<div class="features_items">
					<h2 class="title text-center">All Products</h2>
					<div class = "featured-items">
							
					</div>	

						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>					
				</div>			
<!--All Products-->
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="shop.html">Our Shop</a></li>
								<li><a href="#cats">Our Categories</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Company Profile</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="about.html#ms">Mission Statement</a></li>
								<li><a href="about.html#v">Vision</a></li>
								<li><a href="about.html#pr">Product Range</a></li>
								<li><a href="about.html#ma">Market Approach</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Strom</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="contact-us.html">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="mailto:stromcs.sales@outlook.com">Email Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Strom</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 Strom Control Systems Ltd. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	
    <script type="text/javascript">
    	$(document).ready(function(){
    		console.log('Message');

    		//load featured items for the homepage
			//featured items are items the site is trying to promote
			loadAllItems();

			//uses AJAX to get the last 5 items in food table
			function loadAllItems(){
				$.get("get_item.php", {scope: "ALL"}, function(items_arr){
					for(var i in items_arr){
						console.log(items_arr[i]);

						var allTile = toAllHtml(items_arr[i]);
						console.log(allTile);
						$('.featured-items').append(allTile);

					}
				});
			}

			//Append Featured Items to the HTML
			function toAllHtml(item){
				return "<div class='col-sm-4'><div class='product-image-wrapper' ><div class='single-products'><div class='productinfo text-center'> <a href='product_details.php?id="+item.itemid+"'> <img id='product-info-img' class="+item.itemid+" src='"+
						item.image +
						"'/> </a>" +
						"<p>" +
						item.name +
						"</p><div class = 'item-add-to-cart'><a href='#' id="+ item.itemid +" class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a></div></div></div>" + 
						"<div class='choose'>" + 
							"<ul class='nav nav-pills nav-justified'>" +
								"<li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li>"+
							"</ul>" +
						"</div></div></div>";

			}
	  });
    </script>
</body>
</html>