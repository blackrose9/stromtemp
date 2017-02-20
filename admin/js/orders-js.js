$(document).ready(function(){
	console.log('message');

	//load orders
	loadOrders();

	//Uses AJAX to get food items out of the database
	function loadOrders(){
		$.get("get_orders.php", {scope:"ALL"}, function(orders_arr){
			for(var i in orders_arr){

				var OrdersTile = toOrdersHtml(orders_arr[i]);
				$('.inbox-page').append(OrdersTile);
			}
		});
	}

	function toOrdersHtml(orders){
		return "<div class='inbox-row widget-shadow' id='accordion' role='tablist' aria-multiselectable='true'>" +
					"<div class='mail'> <input type='checkbox' class='checkbox'> </div>" +
					"<div class='mail'><div class='date'>"+ orders.date +"</div></div>" +
					"<div class='mail mail-name'> <h6>Customer: " + orders.user + "</h6> </div>" +
					"<a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse"+orders.id+"' aria-expanded='true' aria-controls='collapse"+orders.id+"'>" +
						"<div class='mail'><p class='order-details' id="+orders.id+"> Order Details </p></div>" +
					"</a>" +
					"<div class='mail-right'>" +
						"<div class='dropdown'>" +
							"<a href='#' data-toggle='dropdown' aria-expanded='false'>" +
								"<p><i class='fa fa-ellipsis-v mail-icon'></i></p>" +
							"</a>" +
							"<ul class='dropdown-menu float-right'>" +
								"<li>" +
									"<a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse"+orders.id+"' aria-expanded='true' aria-controls='collapse"+orders.id+"'>" +
										"<i class='fa fa-reply mail-icon'></i>" +
										"Edit" +
									"</a>" +
								"</li>" +
								"<li>" +
									"<a href='#' class='font-red' title=''>" +
										"<i class='fa fa-trash-o mail-icon'></i>" +
										"Disable" +
									"</a>" +
								"</li>" +
							"</ul>" +
						"</div>" + 
					"</div>" +
					"<div class='clearfix'> </div>" + 
					"<div id='collapse"+orders.id+"' class='panel-collapse collapse' role='tabpanel' aria-labelledby='collapse"+orders.id+"'>" +
						"<div class='mail-body'>" + 
							"<p>Total Order Amount: " + orders.total + "</p> <br><br>" +
							"<div class = 'ordered-items-group'>" +
							"<div class='item-desc'> Name</div>"+
							"<div class='item-desc'>  Price </div>"+
							"<div class='item-desc'> Quantity </div>"+
							"<div class='item-desc'> Total Price </div>" +
							"</div>" +
								"<div class='OrderedItems'>  </div>" +
						"</div>" +
					"</div>" +
				"</div>";
	}
	count = 0;
	$(document).on('click','.order-details', function(e){
		count++;
		if(count > 1){
			window.location.href = "orders.php";
		}
		var orderID = $(this).attr('id');
		
		$.ajax({
			type: "POST",
			url: "get-ordered-items.php",
			data: {id: orderID },
			cache: false,
			success: function(result){
				for(var i in result){
					console.log(result[i]);

					var orderedItemsTile = toOrderedItemsHtml(result[i]);
					$('.OrderedItems').append(orderedItemsTile);

				}
			}
		});


	});

	function toOrderedItemsHtml(result){
		return "<div class = 'ordered-items-group'>" +
				"<div class='item-desc'>" + result.name + "</div>"+
				"<div class='item-desc'>" + result.price + "</div>"+
				"<div class='item-desc'>" + result.quantity + "</div>"+
				"<div class='item-desc'>" + result.totalPrice + "</div>" +
				"</div>";
	}

});