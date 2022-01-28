<?php 
	include('Dbh.php');

	class Customer extends Dbh{
		private $email;
		private $name;

		public function __construct($name, $email) {
			$this->name = $name;
			$this->email = $email;
		}

		public function getName() {
			return $this->name;
		}

		public function getEmail() {
			return $this->email;
		}

		public static function doesEmailExist($email) {
			return true;
		}

		public static function saveCustomer($email, $name, $password) {
			$conn = mysqli_connect('localhost', 'caleb', 'password', 'flartbranchoutdoors');
			$sEmail = mysqli_escape_string($conn, $email);
			$sName = mysqli_escape_string($conn, $name);
			$sPassword = mysqli_escape_string($conn, $password);
			$sql = "INSERT INTO customers(email, name, password) VALUES('$sEmail', '$sName', '$sPassword')";

			if(mysqli_query($conn, $sql)){
				header("Location: index.php");
			} else {
				//FAIL
			}
		}

	}	
?>