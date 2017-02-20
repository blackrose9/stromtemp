<?php
//Start session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
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
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
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
							<a href="index.php"><img src="images/home/logo2.jpg" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									KENYA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Kenya</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									KES
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">KES</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" id="headingnavbar">
								<li><a href="shop.php"><i class="fa fa-star"></i> Products </a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="register.html"><i class="fa fa-user"></i> Register </a></li>
								<!-- <li>
								displays the emaial of the user that has been logged in
								 
								</li> -->
								<li><a href="login.php" <?php if (isset($_SESSION['logout'])){ if ($_SESSION['logout']!=null){?>style="display:none"<?php }} ?>><i class="fa fa-lock"></i> Login</a></li>
								<?php
									echo '<form id ="logout-form" action="process_logout.php"> <input type="submit" name="button" id="submit-button" value='.$_SESSION['logout'].'></form>';
								?>
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
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
										<li><a href="product_details.html">Product Details</a></li> 

                                    </ul>
                                </li> 
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search for food, cuisines..."/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header>
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2></h2>
						

						
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						
					
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
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chinese</a></li>
								<li><a href="#">Indian</a></li>
								<li><a href="#">Japanese</a></li>
								<li><a href="#">Korean</a></li>
								<li><a href="#">Swahili</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
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
					<p class="pull-left">Copyright © 2016 E-SHOPPER Inc. All rights reserved.</p>
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
			loadFeaturedItems();

			//uses AJAX to get the last 5 items in food table
			function loadFeaturedItems(){
				$.get("get_food.php", {scope:"ALL"}, function(food_arr){
					for(var i in food_arr){
						console.log(food_arr[i]);

						var featuredTile = toFeaturedHtml(food_arr[i]);
						console.log(featuredTile);
						$('.featured-items').append(featuredTile);

					}
				});
			}

			//Append Featured Items to the HTML
			function toFeaturedHtml(food){
				return "<div class='col-sm-4'><div class='product-image-wrapper' ><div class='single-products'><div class='productinfo text-center'> <a href='product_details.php?id="+food.id+"'> <img id='product-info-img' class="+food.id+" src='"+
						food.image +
						"'/> </a>" + 
						"<h2> KES " +
						food.price +
						"</h2>" +
						"<p>" +
						food.name +
						"</p><div class = 'item-add-to-cart'><a href='#' id="+ food.id +" class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a></div></div></div>" + 
						"<div class='choose'>" + 
							"<ul class='nav nav-pills nav-justified'>" +
								"<li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li>"+
								"<li><a href='#''><i class='fa fa-plus-square'></i>Add to compare</a></li>" +
							"</ul>" +
						"</div></div></div>";

			}

			//Addd to cart
			$(document).on('click', '.item-add-to-cart a', function (e) {
	    		var productID = $(this).attr('id');
	    	
	    		$.ajax({
					type: "POST",
					url: "process_add_to_cart.php",
					data: { id: productID },
					cache: false,
					success: function(result){
						if(result.error){
							alert(result.msg);
						} else {
							alert(result.msg);
						}
					}
				});

	    		e.preventDefault();
			});


	    });
    </script>
</body>
</html>