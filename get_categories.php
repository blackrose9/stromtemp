<?php
	class category{
		public $catid;
		public $name;

		function __construct($i,$n){
			$this->catid =$i;
			$this->name =$n;
		}
	}

	//connect to database
	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die('Unable to connect to database ['.$db->connect_error.']');

	if($_GET['categories'] === "ALL"){
		//GET all items of the database
		$query = "SELECT * FROM categories";
		if(!$result = $db->query($query)) die('Error getting categories information ['.$db->connect_error.']');
		$category = $result->fetch_all();

		//Format categories as a PHP array
		$category_arr = array();
		foreach($category as $c){
			array_push($category_arr, new category($c[0],$c[1]));
		}

		//Respond with a random category as JSON Object
		header('Content-Type: application/json');
		echo json_encode($category_arr);
	} else {
		echo "Unknown Scope";
	}
?>