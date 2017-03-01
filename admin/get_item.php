<?php
	class items {
		public $itemid;
		public $name;
		public $image;
		public $catid;
		public $description;

		function __construct($i,$n,$img,$ci,$d){
			$this->itemid 		=$i;
			$this->name 		=$n;
			$this->image 		=$img;
			$this->catid 		=$ci;
			$this->description 	=$d;
		}
	}

	//connect to database
	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die('Unable to connect to database ['.$db->connect_error.']');


	if($_GET['scope'] === "ALL"){
		//Get all items out of database
		$query = "SELECT * FROM items";
		if(!$result = $db->query($query)) die ('Error getting Item Information ['.$db->connect_error.']');
		$items = $result->fetch_all();

		//Format item as a PHP array
		$items_arr = array();
		foreach($items as $f){
			array_push($items_arr, new items($f[0],$f[1],$f[2],$f[3],$f[4],$f[5]));
		}

		//Respond with a random item as JSON Object
		header('Content-Type: application/json');
		echo json_encode($items_arr);
	} else {
		echo "Unknown Scope";
	}
?>