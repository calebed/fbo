<?php include("./views/header.php"); ?>

	<div class="col-md" style="height:100%; justify-content: center; margin-bottom: 25px;">
		<div class="card brand-background" style="border-right: solid; border-right-color: #D78617; border-left: solid; border-left-color: #D78617;">
			<div class="card-body text-center">
				<h5 class="card-title" style="font-weight: bolder !important; font-size: 50px !important; color:white;">Our Mission</h5>
				<p class="card-text"style="color:white;">Here at Flat Branch we had a calling to put our talents and goals together to provide quality products that are affordable, useful, and comfortable. We are just like the majority of other hunters. We are everyday hard working folks with a family, job, and a love for hunting. Most of all, we love God and everything we have because of Him. Our products are made in the U.S.A. in Walker County, Alabama by people who care. We know you can get similar products from other places, but here we wanted to give you the option to customize your products so they feel as if they were made just for you. We feel if your spending hard earned money, you should be able to have the product function and look the way you want it to. Feel free to ask about our custom services. We'll do what we can to make you what you need. Thanks for visiting our shop! We invite you to come back anytime</p>
			</div>
		</div>
	</div>

	<?php
		$conn = mysqli_connect('localhost', 'caleb', 'password', 'flartbranchoutdoors');

		// check connection

		if(!$conn) {
			echo 'Connection error: ' + mysqli_connect_error();
		}

		$sql = 'SELECT name, email, id FROM clients';
		$result = mysqli_query($conn, $sql);

		// fetch rows
		$clients = mysqli_fetch_all($result, MYSQLI_ASSOC);
		print_r($clients);

		mysqli_free_result($result);

	 ?>
<?php include("./views/footer.php"); ?>	

