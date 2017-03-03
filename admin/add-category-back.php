<?php
	class Category{
		public $id;
		public $name;
		public $image;
		public $description;

		function __construct($i,$n,$img,$d){
			$this->id 			=$i;
			$this->name 		=$n;
			$this->image 		=$img;
			$this->description 	=$d;
		}
	}

	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die('Unable to connect to database ['. $db->connect_error . ']');

	STATIC $count = 6;
	$count++;

	//file where the image will be saved
	$target = "../images/category/";
	$target = $target . basename( $_FILES['photo']['name']);
	$targetUrl = "images/category/";

	$new_category = new Category(rand(10,1000), $_POST['catname'], $targetUrl.$_FILES['photo']['name'], $_POST['catdesc']);

	$query = "INSERT INTO categories VALUES('".
					$new_category->id."','".
					$new_category->name."','".
					$new_category->image."','".
					$new_category->description."')";
	
	
	if(!$result = $db->query($query)) die('There was an error adding the new category to the table Category [' . $db->error . ']');
	else echo('Category Successfully Added To Database');

	//Writes the photo to the server
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
	//reload page
	header("Location: addcategory.php");

	//Tells you if all is okay
	echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
	}else {

	//Gives and error if all is not okay
	echo "Sorry, there was a problem uploading your file.";
	}


?>