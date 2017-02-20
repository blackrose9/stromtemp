<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>StCS Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Baxster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
					<div class="scrollbar scrollbar1">
						<ul class="nav" id="side-menu">
							<li>
								<a href="index.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
							</li>
							<li>
								<a href="users.php"><i class="fa fa-th-large nav_icon"></i>Users</a>
							</li>
							<!-- Dropdown Items/Stock -->
							<li>
								<a href="#"><i class="fa fa-book nav_icon"></i> Stock <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="additem.php">Add Item</a>
									</li>
									<li>
										<a href="viewitem.php">View Item</a>
									</li>
								</ul>
							</li>
							<!-- Dropdown categories -->
							<li>
								<a href="#" class="chart-nav"><i class="fa fa-list-ul nav_icon"></i>Categories<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="addcategory.php">Add Category</a>
									</li>
									<li>
										<a href="viewcategory.php">View Category</a>
									</li>
								</ul>
								<!-- //nav-second-level -->
							</li>
							<li>
								<a href="../index.php"><i class="fa fa-home nav_icon"></i>Go To Site</a>
							</li>
						</ul>
					</div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="index.php">
						<ul>	
							<li><img src="images/logo.jp" alt="" /></li>
							<li><h1>StCS</h1></li>
							<div class="clearfix"> </div>
						</ul>
					</a>
				</div>
				<!--//logo-->
				<div class="header-right header-right-grid">
					<div class="profile_details_left"><!--notifications of menu start -->
						
							
					
						<div class="clearfix"> </div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
			<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
					</form>
				</div>
				<!--//end-search-box-->
			<div class="header-right">
				
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/user.png" alt=""> </span> 
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <i class="fa fa-sign-out"></i><form action='process_logout.php' method='post'><input type='submit' value='logout'> </form> </li>
							</ul>
						</li>
					</ul>
				</div>
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			
				<!-- four-grids -->
				<div class="row four-grids">
					<div class="col-md-3 ticket-grid">
						<div class="tickets">
							<div class="grid-left">
								<div class="book-icon">
									<i class="fa fa-book"></i>
								</div>
							</div>
							<div class="grid-right">
								<h3>Tickets <span>Answered</span></h3>
								<p>452</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-3 ticket-grid">
						<div class="tickets">
							<div class="grid-left">
								<div class="book-icon">
									<i class="fa fa-rocket"></i>
								</div>
							</div>
							<div class="grid-right">
								<h3>New <span>Projects</span></h3>
								<p>745</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-3 ticket-grid">
						<div class="tickets">
							<div class="grid-left">
								<div class="book-icon">
									<i class="fa fa-bar-chart"></i>
								</div>
							</div>
							<div class="grid-right">
								<h3>Our <span>Status</span></h3>
								<p>125</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-3 ticket-grid">
						<div class="tickets">
							<div class="grid-left">
								<div class="book-icon">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="grid-right">
								<h3>Daily <span>Visitors</span></h3>
								<p>7462</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //four-grids -->
				<!--row-->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Candlestick colors
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<!-- candlestick -->
								<div class="candlestick">
									<script type="text/javascript">
									  // Generate data
									  
									  var data = [];
									  
									  var time = new Date('Dec 1, 2013 12:00').valueOf();
									  
									  var h = Math.floor(Math.random() * 100);
									  var l = h - Math.floor(Math.random() * 20);
									  var o = h - Math.floor(Math.random() * (h - l));
									  var c = h - Math.floor(Math.random() * (h - l));

									  var v = Math.floor(Math.random() * 1000);
									  
									  for (var i = 0; i < 30; i++) {
										data.push([time, o, h, l, c, v]);
										h += Math.floor(Math.random() * 10 - 5);
										l = h - Math.floor(Math.random() * 20);
										o = h - Math.floor(Math.random() * (h - l));
										c = h - Math.floor(Math.random() * (h - l));
										v += Math.floor(Math.random() * 100 - 50);
										time += 30 * 60000; // Add 30 minutes
									  }
									</script>
									<div id="example-8"></div>
									
									<script type="text/javascript">
									  $(function() {
										$('#example-8').jqCandlestick({
										  data: data,
										  theme: 'light',
										  yAxis: [{
											height: 7, // 7 / (7 + 3)
										  }, {
											height: 3, // 3 / (7 + 3)
										  }],
										  series: [{
											type: 'candlestick',
											upStroke: '#0C0',
											downStroke: '#C00',
											downColor: 'rgba(255, 0, 0, 0.4)',
										  }, {
											type: 'column',
											name: 'VOLUME',
											yAxis: 1,
											stroke: '#00C',
											color: 'rgba(0, 0, 255, 0.5)',
										  }],
										});
									  });
									</script>
								</div>
								<!-- //candlestick -->
							</div>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Lines and points
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="lines-points">
									<div id="example-4"></div>
									<script type="text/javascript">
									  $(function() {
										$('#example-4').jqCandlestick({
										  data: data,
										  theme: 'light',
										  series: [{
											type: 'line',
										  }, {
											type: 'point',
										  }],
										});
									  });
									</script>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--//row-->
				<!--row-->
				<div class="row">
					<div class="col-md-7">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Real Time Updates
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="demo-container">
									<div id="placeholder" class="demo-placeholder"></div>
								</div>
								<p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Error Bars
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="demo-container">
									<div id="placeholder1" class="demo-placeholder"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<!--//row-->
				<!--row-->
				<div class="row">
					<div class="col-md-5 program-grid">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Programming Skills
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="chart-skills">
									<div class="skills-holder" id="canvas-holder">
										<canvas id="chart-area" width="500" height="500"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7 monthly-grid">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Monthly Status Report
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<!-- status -->
								<div class="contain">	
									<div class="gantt"></div>
								</div>
								<!-- status -->
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--//row-->
			</div>
		</div>
		<!--footer-->
		 <div class="dev-page">
	 
			<!-- page footer -->   
			<!-- dev-page-footer-closed dev-page-footer-fixed -->
            <div class="dev-page-footer dev-page-footer-fixed"> 
				<!-- container -->
				<div class="container">
					<div class="copyright">
						<p>© 2016 Live StCS . All Rights Reserved .</p> 
					</div>
					<!-- page footer buttons -->
					
					<!-- //page footer buttons -->
					<!-- page footer container -->
					<div class="dev-page-footer-container">
						
						<!-- loader and close button -->
					
						<!-- //loader and close button -->                    
						
						<!-- informers -->
						

						<script type="text/javascript">
						  
						  $(function(){


						  $('#marquee-vertical').marquee();  
						  $('#marquee-horizontal').marquee({direction:'horizontal', delay:0, timing:50});  

						});

						</script>                   
						</div>
						<!-- //informers -->
						
						<!-- informers -->
						<div class="dev-page-footer-container-content" id="footer_content_2">   
							<div class="graphs">
								<div class="col-md-4 graph-points">
									<div class="graph-left">
									   <script type="text/javascript">
										  // Generate data
										  
										  var data = [];
										  
										  var time = new Date('Dec 1, 2013 12:00').valueOf();
										  
										  var h = Math.floor(Math.random() * 100);
										  var l = h - Math.floor(Math.random() * 20);
										  var o = h - Math.floor(Math.random() * (h - l));
										  var c = h - Math.floor(Math.random() * (h - l));

										  var v = Math.floor(Math.random() * 1000);
										  
										  for (var i = 0; i < 30; i++) {
											data.push([time, o, h, l, c, v]);
											h += Math.floor(Math.random() * 10 - 5);
											l = h - Math.floor(Math.random() * 20);
											o = h - Math.floor(Math.random() * (h - l));
											c = h - Math.floor(Math.random() * (h - l));
											v += Math.floor(Math.random() * 100 - 50);
											time += 30 * 60000; // Add 30 minutes
										  }
										</script>
										<div id="example-1"></div>
										<script type="text/javascript">
										  $(function() {
											$('#example-1').jqCandlestick({
											  data: data,
											  theme: 'light',
											  series: [{
											  }],
											});
										  });
										</script>
									</div>
									<div class="graph-right">
										<h3>TODAY'S STATS</h3>
										<p>Duis aute irure dolor in reprehenderit.</p>
										<ul>
											<li>Earning: $400 USD</li>
											<li>Items Sold: 20 Items</li>
											<li>Last Hour Sales: $34 USD</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-4 bar-grid">
									<div class="graph-left">
										<canvas id="line"></canvas>
											<script>
													var lineChartData = {
														labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
														datasets : [
															{
																fillColor : "rgba(202, 202, 202, 0)",
																strokeColor : "#3E495A",
																pointColor : "#fbfbfb",
																pointStrokeColor : "#fbfbfb",
																data : [20,35,45,30,10,65,40]
															}
														]
														
													};
													new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
											</script>
									</div>
									<div class="graph-right">
										<h3>TODAY'S STATS</h3>
										<p>Duis aute irure dolor in reprehenderit.</p>
										<ul>
											<li>Earning: $400 USD</li>
											<li>Items Sold: 20 Items</li>
											<li>Last Hour Sales: $34 USD</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-4 switch-right">
									<div class="graph-left">
										<canvas id="bar"></canvas>
											<script>
												var barChartData = {
													labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon","Tue","Wed","Thu"],
													datasets : [
														{
															fillColor : "#fbc02d",
															strokeColor : "#fbc02d",
															highlightFill: "rgba(220,220,220,0.75)",
															highlightStroke: "rgba(220,220,220,1)",
															data : [25,40,50,65,55,30,20,10,6,4]
														},
														{
															fillColor : "#3E495A",
															strokeColor : "#3E495A",
															data : [30,45,55,70,40,25,15,8,5,2]
														}
													]
													
												};
													new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
											</script>
									</div>
									<div class="graph-right">
										<h3>TODAY'S STATS</h3>
										<p>Duis aute irure dolor in reprehenderit.</p>
										<ul>
											<li>Earning: $400 USD</li>
											<li>Items Sold: 20 Items</li>
											<li>Last Hour Sales: $34 USD</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
						<!-- //informers -->
						
						<!-- projects -->
						<div class="dev-page-footer-container-content" id="footer_content_3">                        
							<div class="social">
								<div class="col-md-3 top-comment-grid">
									<div class="comments">
										<div class="comments-icon">
											<i class="fa fa-comments"></i>
										</div>
										<div class="comments-info">
											<h3>85</h5>
											<a href="#">Comments</a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-3 top-comment-grid">
									<div class="comments likes">
										<div class="comments-icon">
											<i class="fa fa-facebook"></i>
										</div>
										<div class="comments-info likes-info">
											<h3>2150</h5>
											<a href="#">Likes</a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-3 top-comment-grid">
									<div class="comments tweets">
										<div class="comments-icon">
											<i class="fa fa-twitter"></i>
										</div>
										<div class="comments-info tweets-info">
											<h3>325</h5>
											<a href="#">Tweets</a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-3 top-comment-grid">
									<div class="comments views">
										<div class="comments-icon">
											<i class="fa fa-eye"></i>
										</div>
										<div class="comments-info views-info">
											<h3>471</h5>
											<a href="#">Views</a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<!-- //projects -->
					</div>
                <!-- //page footer container -->
                
                </div>
				<!-- //container -->
            </div>
            <!-- /page footer -->
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- Bootstrap Core JavaScript --> 
		
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
		<script type="text/javascript" src="js/jquery.marquee.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script type="js/mainscript.js"></script>
		
		<!-- candlestick -->
		<script type="text/javascript" src="js/jquery.jqcandlestick.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jqcandlestick.css" />
		<!-- //candlestick -->
		
		<!--max-plugin-->
		<script type="text/javascript" src="js/plugins.js"></script>
		<!--//max-plugin-->
		
		<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
		
		<!-- real-time-updates -->
		<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
		<script type="text/javascript">

		$(function() {

			// We use an inline data source in the example, usually data would
			// be fetched from a server

			var data = [],
				totalPoints = 300;

			function getRandomData() {

				if (data.length > 0)
					data = data.slice(1);

				// Do a random walk

				while (data.length < totalPoints) {

					var prev = data.length > 0 ? data[data.length - 1] : 50,
						y = prev + Math.random() * 10 - 5;

					if (y < 0) {
						y = 0;
					} else if (y > 100) {
						y = 100;
					}

					data.push(y);
				}

				// Zip the generated y values with the x values

				var res = [];
				for (var i = 0; i < data.length; ++i) {
					res.push([i, data[i]])
				}

				return res;
			}

			// Set up the control widget

			var updateInterval = 30;
			$("#updateInterval").val(updateInterval).change(function () {
				var v = $(this).val();
				if (v && !isNaN(+v)) {
					updateInterval = +v;
					if (updateInterval < 1) {
						updateInterval = 1;
					} else if (updateInterval > 2000) {
						updateInterval = 2000;
					}
					$(this).val("" + updateInterval);
				}
			});

			var plot = $.plot("#placeholder", [ getRandomData() ], {
				series: {
					shadowSize: 0	// Drawing is faster without shadows
				},
				yaxis: {
					min: 0,
					max: 100
				},
				xaxis: {
					show: false
				}
			});

			function update() {

				plot.setData([getRandomData()]);

				// Since the axes don't change, we don't need to call plot.setupGrid()

				plot.draw();
				setTimeout(update, updateInterval);
			}

			update();

			// Add the Flot version string to the footer

			$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
		});

		</script>
		<!-- //real-time-updates -->
		<!-- error-graph -->
		<script language="javascript" type="text/javascript" src="js/jquery.flot.errorbars.js"></script>
		<script language="javascript" type="text/javascript" src="js/jquery.flot.navigate.js"></script>
		<script type="text/javascript">
			$(function() {

				function drawArrow(ctx, x, y, radius){
					ctx.beginPath();
					ctx.moveTo(x + radius, y + radius);
					ctx.lineTo(x, y);
					ctx.lineTo(x - radius, y + radius);
					ctx.stroke();
				}

				function drawSemiCircle(ctx, x, y, radius){
					ctx.beginPath();
					ctx.arc(x, y, radius, 0, Math.PI, false);
					ctx.moveTo(x - radius, y);
					ctx.lineTo(x + radius, y);
					ctx.stroke();
				}

				var data1 = [
					[1,1,.5,.1,.3],
					[2,2,.3,.5,.2],
					[3,3,.9,.5,.2],
					[1.5,-.05,.5,.1,.3],
					[3.15,1.,.5,.1,.3],
					[2.5,-1.,.5,.1,.3]
				];

				var data1_points = {
					show: true,
					radius: 5,
					fillColor: "blue", 
					errorbars: "xy", 
					xerr: {show: true, asymmetric: true, upperCap: "-", lowerCap: "-"}, 
					yerr: {show: true, color: "red", upperCap: "-"}
				};

				var data2 = [
					[.7,3,.2,.4],
					[1.5,2.2,.3,.4],
					[2.3,1,.5,.2]
				];

				var data2_points = {
					show: true,
					radius: 5,
					errorbars: "y", 
					yerr: {show:true, asymmetric:true, upperCap: drawArrow, lowerCap: drawSemiCircle}
				};

				var data3 = [
					[1,2,.4],
					[2,0.5,.3],
					[2.7,2,.5]
				];

				var data3_points = {
					//do not show points
					radius: 0,
					errorbars: "y", 
					yerr: {show:true, upperCap: "-", lowerCap: "-", radius: 5}
				};

				var data4 = [
					[1.3, 1],
					[1.75, 2.5],
					[2.5, 0.5]
				];

				var data4_errors = [0.1, 0.4, 0.2];
				for (var i = 0; i < data4.length; i++) {
					data4_errors[i] = data4[i].concat(data4_errors[i])
				}

				var data = [
					{color: "blue", points: data1_points, data: data1, label: "data1"}, 
					{color: "red",  points: data2_points, data: data2, label: "data2"},
					{color: "green", lines: {show: true}, points: data3_points, data: data3, label: "data3"},
					// bars with errors
					{color: "orange", bars: {show: true, align: "center", barWidth: 0.25}, data: data4, label: "data4"},
					{color: "orange", points: data3_points, data: data4_errors}
				];

				$.plot($("#placeholder1"), data , {
					legend: {
						position: "sw",
						show: true
					},
					series: {
						lines: {
							show: false
						}
					},
					xaxis: {
						min: 0.6,
						max: 3.1
					},
					yaxis: {
						min: 0,
						max: 3.5
					},
					zoom: {
						interactive: true
					},
					pan: {
						interactive: true
					}
				});

				// Add the Flot version string to the footer

				$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
			});

			</script>
		<!-- //error-graph -->
		<!-- Skills-graph -->		
		<script src="js/Chart.Core.js"></script>
		<script src="js/Chart.Doughnut.js"></script>
		<script>

			var doughnutData = [
					{
						value: 2,
						label: "One",
						color:"#99CC00"
					},
					{
						value: 3,
						label: "Two",
						color:"#FF3300"
					},
					{
						value: 3,
						label: "Three",
						color:"#944DDB"
					},
					{
						value: 4,
						label: "Four",
						color:"#3399FF"
					},
					{
						value: 5,
						label: "Five",
						color:"#FFC575"
					}

				];

				window.onload = function(){
					var ctx = document.getElementById("chart-area").getContext("2d");
					window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
				};

		</script>
		<!-- //Skills-graph -->
		<!-- status -->
		<script src="js/jquery.fn.gantt.js"></script>
		<script>

			$(function() {

				"use strict";

				$(".gantt").gantt({
					source: [{
						name: "Sprint 0",
						desc: "Analysis",
						values: [{
							from: "/Date(1320192000000)/",
							to: "/Date(1322401600000)/",
							label: "Requirement Gathering", 
							customClass: "ganttRed"
						}]
					},{
						name: " ",
						desc: "Scoping",
						values: [{
							from: "/Date(1322611200000)/",
							to: "/Date(1323302400000)/",
							label: "Scoping", 
							customClass: "ganttRed"
						}]
					},{
						name: "Sprint 1",
						desc: "Development",
						values: [{
							from: "/Date(1323802400000)/",
							to: "/Date(1325685200000)/",
							label: "Development", 
							customClass: "ganttGreen"
						}]
					},{
						name: " ",
						desc: "Showcasing",
						values: [{
							from: "/Date(1325685200000)/",
							to: "/Date(1325695200000)/",
							label: "Showcasing", 
							customClass: "ganttBlue"
						}]
					},{
						name: "Sprint 2",
						desc: "Development",
						values: [{
							from: "/Date(1326785200000)/",
							to: "/Date(1325785200000)/",
							label: "Development", 
							customClass: "ganttGreen"
						}]
					},{
						name: " ",
						desc: "Showcasing",
						values: [{
							from: "/Date(1328785200000)/",
							to: "/Date(1328905200000)/",
							label: "Showcasing", 
							customClass: "ganttBlue"
						}]
					},{
						name: "Release Stage",
						desc: "Training",
						values: [{
							from: "/Date(1330011200000)/",
							to: "/Date(1336611200000)/",
							label: "Training", 
							customClass: "ganttOrange"
						}]
					},{
						name: " ",
						desc: "Deployment",
						values: [{
							from: "/Date(1336611200000)/",
							to: "/Date(1338711200000)/",
							label: "Deployment", 
							customClass: "ganttOrange"
						}]
					},{
						name: " ",
						desc: "Warranty Period",
						values: [{
							from: "/Date(1336611200000)/",
							to: "/Date(1349711200000)/",
							label: "Warranty Period", 
							customClass: "ganttOrange"
						}]
					}],
					navigate: "scroll",
					scale: "weeks",
					maxScale: "months",
					minScale: "days",
					itemsPerPage: 10,
					onItemClick: function(data) {
						alert("Item clicked - show some details");
					},
					onAddClick: function(dt, rowId) {
						alert("Empty space clicked - add an item!");
					},
					onRender: function() {
						if (window.console && typeof console.log === "function") {
							console.log("chart rendered");
						}
					}
				});

				$(".gantt").popover({
					selector: ".bar",
					title: "I'm a popover",
					content: "And I'm the content of said popover.",
					trigger: "hover"
				});

				prettyPrint();

			});

		</script>
		<!-- //status -->
		
</body>
</html>