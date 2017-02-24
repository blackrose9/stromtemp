<?php
	//image post
	$img = $_FILES['photo']['name'];

	if($img == null ){
		updateDB();
	} else {
		updateRow();
	}

	function updateDB(){

		//connection
		$db = new mysqli('localhost','root','','stcs');
		if($db->connect_errno > 0) die('Unable to connect to database ['. $db->connect_error . ']');

		$name = $_POST['catname'];
		$desc = $_POST['catdesc'];
		$id = $_POST['catid'];

		$query = "UPDATE categories SET catname = '$name', catdesc = '$desc' WHERE catid = '$id'";
		if(!$result = $db->query($query)) die('There was an error updating to the table category [' . $db->error . ']');
		else header("Location: viewcategory.html");

	}
	
	function updateRow(){
		//directory where immage will be saved
		$target = "../images/category/";
		$target = $target . basename( $_FILES['photo']['name']);
		$targetUrl = "images/category/";

		$name = $_POST['catname'];
		$desc = $_POST['catdesc'];
		$id = $_POST['catid'];
		$img = $targetUrl.$_FILES['photo']['name'];

		$query = "UPDATE categories SET catname = '$name', catimage = '$img', catdesc = '$desc' WHERE catid = '$id'";
		if(!$result = $db->query($query)) die('There was an error updating to the table items [' . $db->error . ']');
		else echo('Category Updated');

		//Writes the photo to the server
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
		//reload page
		header("Location: viewcategory.php");

		//Tells you if its all ok
		echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the database";
		}else {

		//Gives and error if its not
		echo "Sorry, there was a problem uploading your file.";
		}
	}
?>