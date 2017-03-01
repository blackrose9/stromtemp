$(document).ready(function(){
	console.log('message');

	//load item
	loadItem();

	//Uses AJAX to get Item items out of the database
	function loadItem(){
		$.get("get_item.php", {scope:"ALL"}, function(items_arr){
			for(var i in items_arr){

				var itemTile = toItemHtml(items_arr[i]);
				$('#inbox-page').append(itemTile);
			}
		});
	}

	function toItemHtml(item){
		return "<div class='inbox-row widget-shadow' id='accordion' role='tablist' aria-multiselectable='true'>" +
					"<div class='mail'> <input type='checkbox' class='checkbox'> </div>" +
					"<div class='mail'><img src='../"+ item.image +"' alt='' id='item-image'></div>" +
					"<div class='mail mail-name'> <h6>" + item.name + "</h6> </div>" +
					"<a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse"+item.id+"' aria-expanded='true' aria-controls='collapse"+item.id+"'>" +
						"<div class='mail'><p class='edit-item'> Edit </p> </div>" +
					"</a>" +
					"<div class='mail-right'>" +
						"<div class='dropdown'>" +
							"<a href='#' data-toggle='dropdown' aria-expanded='true'>" +
								"<p><p class='disable-item'> Disable </p></p>" +
							"</a>" +
							"<ul class='dropdown-menu float-right'>" +
								"<li>" +
									"<a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse"+item.id+"' aria-expanded='true' aria-controls='collapse"+item.id+"'>" +
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
					"<div id='collapse"+item.id+"' class='panel-collapse collapse' role='tabpanel' aria-labelledby='collapse"+item.id+"'>" +
						"<div class='mail-body'>" + 
							"<p> Item Description: " + item.description + "</p> <br><br>" +
								"<form method='post' action='update_item.php' enctype='multipart/form-data'>" +
									"Edit Item: <br>" +
									"<input type='text' placeholder='Name' name='itemid' value='"+item.id+"' hidden>"+
									"<input type='text' placeholder='Name' name='itemname' value='"+item.name+"'>" +
									"<input type='text' placeholder='Description' name='itemdesc' value='"+item.description+"'><br>" +
									"<select id='item-category' name='item-category'>" +
										"<option value=''> -Select another Category- </option>" +
									"</select> <br><br>" +
									"<input type='file' placeholder='Choose Image' name='photo' ><br>"+
									"<input type='submit' id='save-changes' value='Save Changes'>" +
								"</form>" +
						"</div>" +
					"</div>" +
				"</div>";
	}

	//load dropdown menu for categories
	loaddropDown();

	function loaddropDown(){
		$.get("get_categories.php", {categories:"ALL"}, function(category_arr){
			for(var i in category_arr){
							
				var catTile = todropHtml(category_arr[i]);
				console.log(catTile);
				$('#item-category').append(catTile);
			}
		});
	}

	function todropHtml(cat){
		return "<option value =" + cat.id + ">" + cat.name + "</option>";
	}
});