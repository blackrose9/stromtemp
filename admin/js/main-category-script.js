$(document).ready(function(){
	console.log('message');

	//load food
	loadCategories();

	//Uses AJAX to get food items out of the database
	function loadCategories(){
		$.get("get_categories.php", {categories:"ALL"}, function(category_arr){
			for(var i in category_arr){

				var CategoryTile = toCategoryHtml(category_arr[i]);
				$('.inbox-page').append(CategoryTile);
			}
		});
	}

	function toCategoryHtml(category){
		return "<div class='inbox-row widget-shadow' id='accordion' role='tablist' aria-multiselectable='true'>" +
					"<div class='mail'> <input type='checkbox' class='checkbox'> </div>" +
					"<div class='mail'><img src='../"+ category.image +"' alt='' id='food-image'></div>" +
					"<div class='mail mail-name'> <h6>" + category.name + "</h6> </div>" +
					"<a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse"+category.id+"' aria-expanded='true' aria-controls='collapse"+category.id+"'>" +
						"<div class='mail'><p> Description </p></div>" +
					"</a>" +
					"<div class='mail-right'>" +
						"<div class='dropdown'>" +
							"<a href='#' data-toggle='dropdown' aria-expanded='false'>" +
								"<p><i class='fa fa-ellipsis-v mail-icon'></i></p>" +
							"</a>" +
							"<ul class='dropdown-menu float-right'>" +
								"<li>" +
									"<a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse"+category.id+"' aria-expanded='true' aria-controls='collapse"+category.id+"'>" +
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
					"<div id='collapse"+category.id+"' class='panel-collapse collapse' role='tabpanel' aria-labelledby='collapse"+category.id+"'>" +
						"<div class='mail-body'>" + 
							"<p>" + category.description + "</p> <br><br>" +
								"<form method='post' action='update_category.php' enctype='multipart/form-data'>" +
									"Edit Category: <br>" +
									"<input type='text' placeholder='Name' name='catid' value='"+category.id+"' hidden>" +
									"<input type='text' placeholder='New Name' name='catname' value='"+category.name+"'>" +
									"<input type='text' placeholder='New Description' name ='catdesc' value='"+category.description+"'><br>" +
									"<input type='file' placeholder='Choose Image' name='photo' > <br>" +
									"<input type='submit' id='save-changes' value='Save Changes'>" +
								"</form>" +
						"</div>" +
					"</div>" +
				"</div>";
	}

});