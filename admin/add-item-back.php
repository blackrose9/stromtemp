<?php
	class item{
		public $id;
		public $name;
		public $price;
		public $image;
		public $catid;
		public $description;

		function __construct($i,$n,$p,$img,$ci,$d){
			$this->id 			=$i;
			$this->name 		=$n;
			$this->price 		=$p;
			$this->image 		=$img;
			$this->catid 		=$ci;
			$this->description 	=$d;
		}
	}

	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die('Unable to connect to database ['. $db->connect_error . ']');

	STATIC $count = 6;
	$count++;

	//directory where image will be saved
	$target = "../images/items/";
	$target = $target . basename( $_FILES['photo']['name']);
	$targetUrl = "images/items/";

	$new_item = new item(rand(10,1000), $_POST['itemname'],$_POST['price'], $targetUrl.$_FILES['photo']['name'], $_POST['catid'], $_POST['description']);

	$query = "INSERT INTO items VALUES('".
					$new_item->id."','".
					$new_item->name."','".
					$new_item->price."','".
					$new_item->image."','".
					$new_item->catid."','".
					$new_item->description."')";
	
	
	if(!$result = $db->query($query)) die('There was an error adding the new category to the table Items [' . $db->error . ']');
	else echo('Item Added To Database');

	//Writes the photo to the server
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
	//reload page
	header("Location: additem.php");

	//Tells you if its all ok
	echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
	}else {

	//Gives and error if its not
	echo "Sorry, there was a problem uploading your file.";
	}

?>