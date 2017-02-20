$(document).ready(function(){
	console.log('Message');
	
	

	//load featured items for the homepage
	//featured items are items the site is trying to promote
	loadFeaturedItems();

	//uses AJAX to get the last 5 items in item table
	function loadFeaturedItems(){
		$.get("get_item.php", {scope:"ALL"}, function(item_arr){
			for(var i = 0; i < 6; i++){
				console.log(item_arr[i]);

				var featuredTile = toFeaturedHtml(item_arr[i]);
				console.log(featuredTile);
				$('.featured-items').append(featuredTile);

			}
		});
	}

	//Append Featured Items to the HTML
	function toFeaturedHtml(item){
		return "<div class='col-sm-4'><div class='product-image-wrapper' ><div class='single-products'><div class='productinfo text-center'> <a href='product_details.php?id="+item.id+"'> <img id='product-info-img' class="+item.id+" src='"+
				item.image +
				"'/> </a>" + 
				"<h2> KES " +
				item.price +
				"</h2>" +
				"<p>" +
				item.name +
				"</p><div class = 'item-add-to-cart'><a href='#' id="+ item.id +" class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a></div></div></div>" + 
				"<div class='choose'>" + 
					"<ul class='nav nav-pills nav-justified'>" +
						"<li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li>"+
						"<li><a href='#''><i class='fa fa-plus-square'></i>Add to compare</a></li>" +
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
						"<h4 class='panel-title'><a href='#'>" + 
						cat.name + 
						"</a></h4>" +
					"</div>" +
				"</div><hr>";
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
							"<button type='button' class='btn btn-default get'>See More</button>" + 
						"</div>" + 
						"<div class='col-sm-6'>" +
							"<img class='girl img-responsive' src='"+ slider.image + "'/>" +
						"</div>" + 
					"</div>";
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

	//load cart items for specific user
	loadCartItems();

	function loadCartItems(){
		$.get("get_cart.php", {scope:"ALL"}, function(cart_arr){
			for(var i in cart_arr){
				console.log(cart_arr[i]);

				var cartTile = toCartHtml(cart_arr[i]);
				$('.shop-cart-items').append(cartTile);

			}
		});
	}

	function toCartHtml(cart){

	return				"<tr>" +
							"<td class='cart_product'>" + 
								"<a href=''><img src='"+ cart.image +"' alt='' id='cart-image'></a>" +
							"</td>" +
							"<td class='cart_description'>" +
								"<h4><a href=''>" + cart.name + "</a></h4>" +
							"</td>" +
							"<td class='cart_price'>" +
								"<p id='intitalPrice'>KES "+ cart.InitialPrice +"</p>" +
							"</td>" +
							"<td class='cart_quantity'>" +
								"<div class='cart_quantity_button'>" +
									"<form action='update_cart.php' method='post'>" +
									"<input type='hidden' name='shopcartID' value=" + cart.ShopcartID + ">" +
									"<input class='cart_quantity_input' type='text' name='quantity' value="+ cart.Quantity +" autocomplete='off' size='2'>" +
									"<button class='submit_update' type='submit'> Update </button>" +
									"</form>" +
								"</div>" +
							"</td>" +
							"<td class='cart_total'>" +
								"<p class='cart_total_price'>KES "+ cart.FinalPrice + "</p>" +
							"</td>" +
							"<td class='cart_delete'>" +
								"<form action='delete_cart.php' method='post'> " +
								"<input type='hidden' name='shopcartID' value=" + cart.ShopcartID + ">" +
								"<button class='cart_quantity_delete' href=''><i class='fa fa-times'></i></button>" +
								"</form>" +
							"</td>" +
						"</tr>";
	}



	//load recommended items
	loadRecommendedItems();

	//uses AJAX to get the last 5 items in item table
	function loadRecommendedItems(){
		$.get("get_item.php", {scope:"ALL"}, function(item_arr){
			for(var i = 0; i < 3; i++){
				console.log(item_arr[i]);

				var featuredTile = toRecommendedHtml(item_arr[i]);
				console.log(featuredTile);
				$('.item active').append(featuredTile);

			}
		});
	}

	function toRecommendedHtml(item){
		return 			"<div class='col-sm-4'>" +
							"<div class='product-image-wrapper'>" +
								"<div class='single-products'>" +
									"<div class='productinfo text-center'>" +
										"<img src='"+ item.image +"' alt=''>" +
										"<h2> KES " + item.price + "</h2>";
										"<p>" + item.name + "</p>" +
										"<a href='#' id="+ item.id +"class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>" +
									"</div>" +
												
								"</div>" +
							"</div>" +
						"</div>";
	}

	loadTotalPrice();

	function loadTotalPrice(){
		$.get("get_totalprice.php", {scope:"ALL"}, function(price_arr){
			var totalPrice = 0;
			for(var i in price_arr){
				//console.log(price_arr[i].finalprice);
				totalPrice+=parseFloat(price_arr[i].finalprice);
			}
			var vat = 0.16 * totalPrice;
			var subtotal = totalPrice - vat;
			var totalPriceHtml = toTotalPriceHtml(subtotal,vat,totalPrice);
			var totalOrderSummary = toCheckoutSummary(subtotal,vat,totalPrice);
			$('.total_area').append(totalPriceHtml);
			$('.order_summ').append(totalOrderSummary);
		});
	}

	function toTotalPriceHtml(subtotal,vat,totalPrice){
		return 		"<ul>" +
						"<li>Cart Sub Total <span>KES "+subtotal+"</span></li>" +
						"<li> Value Added Tax (16%) <span>KES "+vat+"</span></li>" +
						"<li>Shipping Cost <span> KES 0</span></li>" +
						"<li>Total <span>KES "+totalPrice+"</span></li>" +
					"</ul>" +
					"<a class='btn btn-default check_out' href='checkout.php'>Check Out</a>";
	}

	function toCheckoutSummary(subtotal,vat,totalPrice){
	return 			"<form action='process_order.php' method='post'>" +
					"<ul>" +
						"<li>Cart Sub Total <span>KES "+subtotal+"</span></li>" +
						"<li> Value Added Tax (16%) <span>KES "+vat+"</span></li>" +
						"<li>Shipping Cost <span> KES 0</span></li>" +
						"<li>Total <span>KES <input name='totalSale' value="+totalPrice+" readonly></span></li>" +
						"M-Pesa Transaction Code*: <br>" +
						"<input type='text' required> <br>" +
					"</ul>" +					
					"<button class='btn btn-default check_out' type='submit' >Process Order</button>" +
					"</form>";
	}

	

	

});