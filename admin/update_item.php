<?php
	//image post
	$img = $_FILES['photo']['name'];
	$cat = $_POST['item-category']; 

	if($img == null && $cat == null){
		updateDB();
	} else if($img == null){
		updateDBRecord();
	}else if($cat == null){
		updateDBRecordRow();
	} else {
		updateRow();
	}

	function updateDB(){

		//connection
		$db = new mysqli('localhost','root','','stcs');
		if($db->connect_errno > 0) die('Unable to connect to database ['. $db->connect_error . ']');

		$name = $_POST['itemname'];
		$desc = $_POST['itemdesc'];
		$id = $_POST['itemid'];

		$query = "UPDATE items SET name = '$name', description = '$desc' WHERE itemid = '$id'";
		if(!$result = $db->query($query)) die('There was an error updating to the table items [' . $db->error . ']');
		else header("Location: viewitem.html");

	}

	function updateDBRecord(){
		//connection 
		$db = new mysqli('localhost','root','','stcs');
		if($db->connect_errno > 0) die('Unable to connect to database ['. $db->connect_error . ']');

		$name = $_POST['itemname'];
		$desc = $_POST['itemdesc'];
		$cat = $_POST['item-category'];
		$id = $_POST['itemid'];

		$query = "UPDATE items SET name = '$name', description = '$desc', catid = '$cat' WHERE itemid = '$id'";
		if(!$result = $db->query($query)) die('There was an error updating to the table items [' . $db->error . ']');
		else header("Location: viewitem.html");

	}

	function updateDBRecordRow(){
		//directory where image will be saved
		$target = "../images/items/";
		$target = $target . basename( $_FILES['photo']['name']);
		$targetUrl = "images/items/";

		$name = $_POST['itemname'];
		$desc = $_POST['itemdesc'];
		$id = $_POST['itemid'];
		$img = $targetUrl.$_FILES['photo']['name'];

		$query = "UPDATE items SET name = '$name', image = '$img', description = '$desc' WHERE itemid = '$id'";
		if(!$result = $db->query($query)) die('There was an error updating to the table items [' . $db->error . ']');
		else echo('Item Added Updated to DB');

		//Writes the photo to the server
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
		//reload page
		header("Location: viewitem.html");

		//Tells you if its all ok
		echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
		}else {

		//Gives and error if its not
		echo "Sorry, there was a problem uploading your file.";
		}


	}

	function updateRow(){
		//directory where immage will be saved
		$target = "../images/items/";
		$target = $target . basename( $_FILES['photo']['name']);
		$targetUrl = "images/items/";

		$name = $_POST['itemname'];
		$desc = $_POST['itemdesc'];
		$id = $_POST['itemid'];
		$cat = $_POST['item-category'];
		$img = $targetUrl.$_FILES['photo']['name'];

		$query = "UPDATE items SET name = '$name', description = '$desc', catid = '$cat', image = '$img' WHERE itemid = '$id'";
		if(!$result = $db->query($query)) die('There was an error updating to the table items [' . $db->error . ']');
		else echo('Item Added Updated to DB');

		//Writes the photo to the server
		if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
		//reload page
		header("Location: viewitem.html");

		//Tells you if its all ok
		echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
		}else {

		//Gives and error if its not
		echo "Sorry, there was a problem uploading your file.";
		}
	}
?>