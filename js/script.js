$(document).ready(function(){
	console.log('Message');
	
	

	//load featured items for the homepage
	//featured items are items the site is trying to promote
	loadFeaturedItems();

	//uses AJAX to get the last 5 items in item table
	function loadFeaturedItems(){
		$.get("get_item.php", {scope:"ALL"}, function(items_arr){
			for(var i = 0; i < 8; i++){
				console.log(items_arr[i]);

				var featuredTile = toFeaturedHtml(items_arr[i]);
				console.log(featuredTile);
				$('.featured-items').append(featuredTile);

			}
		});
	}

	//Append Featured Items to the HTML
	function toFeaturedHtml(item){
		return "<div class='col-sm-4'><div class='product-image-wrapper' ><div class='single-products'><div class='productinfo text-center'> <a href='product_details.php?id="+item.itemid+"'> <img id='product-info-img' class="+item.itemid+" src='"+
				item.image +
				"'/> </a>" +
				"<p>" +
				item.name +
				"</p><div class = 'item-add-to-cart'><a href='#' id="+ item.itemid +" class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a></div></div></div>" + 
				"<div class='choose'>" + 
					"<ul class='nav nav-pills nav-justified'>" +
						"<li><a href=''><i class='fa fa-plus-square'></i>Add to wishlist</a></li>"+
					"</ul>" +
				"</div></div></div>";

	}

	//load category tabs
	loadCategoryTabs();

	//Uses AJAX to get Category names/tabs
	function loadCategoryTabs(){
		$.get("get_categories.php", {categories: "ALL"}, function(category_arr){
			for(var i in category_arr){
				console.log(category_arr[i]);

				var categoryTile = toCategoryHtml(category_arr[i]);
				$('.panel-group').append(categoryTile);

			}
		});
	}

	function toCategoryHtml(cat){
		return "<div class='panel panel-default'>" + 
					"<div class='panel-heading'>" +
						"<h4 class='panel-title'><a href='shop_category.php?catid="+cat.catid+"'>" + 
						cat.name + 
						"</a></h4>" +
					"</div>" +
				"</div><hr>";
	}
	$('.panel-group').on('click', '.panel-title', function(event){
		var cid = $(this).attr('cid');

		//acquiring products
		load_items(cid)
		event.preventDefault();
	});
	//check here first for naming errors
	function load_items(cid){
		$.get("get_cat.php", {catitems: "ALL", id:cid}, function(items_arr){
			alert(items_arr[0].name);
		});
	}

	//load carousel -- slider
	loadSlider();

	//Uses AJAX to get Slider/Carousel content
	function loadSlider(){
		$.get("get_slider.php", {scope:"ALL"}, function(slider_arr){
			for(var i = 0; i < 5; i++){

				var sliderTile = toSliderHtml(slider_arr[i]);
				console.log(sliderTile);
				$('#carousel-inner-items').append(sliderTile);

			}
		});
	}

	function toSliderHtml(slider){
		return		"<div class='item'>" +
					   "<div class='col-sm-6'>" +
							"<h1></h1>" + 
							"<h2 id='slider-desc'>" + slider.description + "</h2>" +
							"<p></p>" +
							"<button type='button' class='btn btn-default get'><a href='shop.php'>See More</a></button>" + 
						"</div>" + 
						"<div class='col-sm-6'>" +
							"<img class='girl img-responsive' src='"+ slider.image + "'/>" +
						"</div>" + 
					"</div>";
	}

	//load recommended items
	loadRecommendedItems();

	//uses AJAX to get the last 5 items in item table
	function loadRecommendedItems(){
		$.get("get_item.php", {scope:"ALL"}, function(items_arr){
			for(var i = 0; i < 3; i++){
				console.log(items_arr[i]);

				var featuredTile = toRecommendedHtml(items_arr[i]);
				console.log(featuredTile);
				$('.item active').append(featuredTile);

			}
		});
	}

	function toRecommendedHtml(items){
		return 			"<div class='col-sm-4'>" +
							"<div class='product-image-wrapper'>" +
								"<div class='single-products'>" +
									"<div class='productinfo text-center'>" +
										"<img src='"+ items.image +"' alt=''>" +
										"<p>" + items.name + "</p>" +
										"<a href='#' id="+ items.itemid +"class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>" +
									"</div>" +
												
								"</div>" +
							"</div>" +
						"</div>";
	}

		loadCateItems();

	//uses AJAX to get the last 5 items in item table
	function loadCateItems(){
		$.get("shop_category.php", {scope:"ALL"}, function(items_arr){
			for(var i in items_arr){
				console.log(items_arr[i]);

				var cateTile = toCateHtml(items_arr[i]);
				console.log(cateTile);
				$('.cateitems').append(cateTile);

			}
		});
	}

	//Append Featured Items to the HTML
	function toCateHtml(item){
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