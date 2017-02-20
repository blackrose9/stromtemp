<?php
	class slider {
		public $itemid; 
		public $name;
		public $image;
		public $description;

		function __construct($i,$n,$img,$d){
			$this->itemid 		=$i;
			$this->name 		=$n;
			$this->image 		=$img;
			$this->description 	=$d;
		}
	}

	//connect to db
	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die('Unable to connect to database ['.$db->connect_error.']');


	if($_GET['scope'] === "ALL"){
		//GET all items of the database
		$query = "SELECT * FROM categories";
		if(!$result = $db->query($query)) die('Error getting categories information ['.$db->connect_error.']');
		$slider = $result->fetch_all();

		//Format categories as a PHP array
		$slider_arr = array();
		foreach($slider as $s){
			array_push($slider_arr, new slider($s[0],$s[1],$s[2],$s[3]));
		}

		//Respond with a random category as JSON Object
		header('Content-Type: application/json');
		echo json_encode($slider_arr);
	} else {
		echo "Uknown Scope";
	}



?>