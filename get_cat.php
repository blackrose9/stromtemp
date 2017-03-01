<?php
//Start session
session_start();
?>
<?php
	class items {
		public $itemid;
		public $name;
		public $image;

		function __construct($i,$n,$img){
			$this->itemid 	=$i;
			$this->name 	=$n;
			$this->image 	=$img;
		}
	}

	//connect to database
	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die('Unable to connect to database ['.$db->connect_error.']');
	
	if($_GET['scope'] === "ALL"){
		//Get all items out of database
		$query = "SELECT * FROM items WHERE categories_catid={$_GET['catid']}";
		if(!$result = $db->query($query)) die ('Error getting Items Information ['.$db->connect_error.']');
		$items = $result->fetch_all();

		//Format items as a PHP array
		$items_arr = array();
		foreach($items as $f){
			array_push($items_arr, new items($f[0],$f[1],$f[2],$f[3]));
		}

		//Respond with a random Items as JSON Object
		header('Content-Type: application/json');
		echo json_encode($items_arr);
		header('Location: shop_category.php?rediectTo='.$_GET['catid']);
	} else {
		echo "Unknown Scope";
	}
?>