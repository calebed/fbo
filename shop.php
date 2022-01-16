<?php include("./models/Product.php"); ?>
<?php include("./views/header.php"); ?>
<?php 
	$products = Product::loadProductsFromDatabase();
?>


<div class="container">
	<div class="row p-3">
		<?php $x = 0; ?>
		<?php foreach($products as $product) { ?>
			<?php 
				$dir = $product['image_path'].'/*.PNG';
				$images = glob($dir);
			?>
			<div class="col-md mx-3">
				<div class="card brand-background brand-side-borders my-3">
					<div id="<?php echo 'reviewCarousel'.$x; ?>" class="carousel slide data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block mx-auto" src=<?php echo $images[0]; ?>>
							</div>
							<?php for($i=1; $i < sizeof($images); $i++) { ?>
								<div class="carousel-item">
									<img class="d-block mx-auto" src=<?php echo $images[$i]?> >
								</div>
							<?php } ?>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="<?php echo '#reviewCarousel'.$x; ?>"data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="<?php echo '#reviewCarousel'.$x; ?>"data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
						</div>
					<h5 class="card-title text-center" style="color:white;"> <?php echo $product['name'] ?> </h5>
					<p class="card-text text-center" style="color:white;"><?php echo $product['description']?></p>
					<p class="card-text text-center" style="color:white;"><?php echo '$'.$product['price']?></p> 
					<a href="index.php" class="btn btn-secondary mx-auto" style="background-color:#D78617 !important ; max-width: 100px;">More Info</a>
				</div>
			</div>
			<?php $x = $x+1; ?>
		<?php } ?>
	</div>	
</div>

<?php include("./views/footer.php"); ?>