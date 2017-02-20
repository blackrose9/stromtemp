<?php
	class item {
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

	//connect to database
	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die('Unable to connect to database ['.$db->connect_error.']');


	if($_GET['items'] === "ALL"){
		//Get all items out of database
		$query = "SELECT * FROM items";
		if(!$result = $db->query($query)) die ('Error getting Item Information ['.$db->connect_error.']');
		$item = $result->fetch_all();

		//Format item as a PHP array
		$item_arr = array();
		foreach($item as $f){
			array_push($item_arr, new item($f[0],$f[1],$f[2],$f[3],$f[4],$f[5]));
		}

		//Respond with a random item as JSON Object
		header('Content-Type: application/json');
		echo json_encode($item_arr);
	} else {
		echo "Unknown Scope";
	}
?>