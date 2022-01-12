<?php
	class Product{
		private $id;
		private $name;
		private $price;
		private $description;
		private $image;
		private $connection;

		public function __construct($id, $name, $price, $description, $image){
			$this->id = $id;
			$this->name = $name;
			$this->price = $price;
			$this->description = $description;
			$this->image = $image;

		}

		public function getId() {
			return $this->id;
		}

		public function getName() {
			return $this->name;
		}

		public function getPrice() {
			return $this->price;
		}

		public function getDescription() {
			return $this->description;
		}

		public function getImage() {
			return $this->image;
		}

		public static function loadProductsFromDatabase() {
			// database connection (need to move to its on class)
			$conn = mysqli_connect('localhost', 'caleb', 'password', 'flartbranchoutdoors');

			if(!$conn) {
			echo 'Connection error: ' + mysqli_connect_error();
			}

			$sql = 'SELECT * FROM products';
			$result = mysqli_query($conn, $sql);
			$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return($products);
		}

	}
 ?>