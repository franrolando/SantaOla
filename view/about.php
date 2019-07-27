<?php

	include_once('nav-bar.php');

 ?>


	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo IMG_PATH; ?>heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
			About
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<?php foreach($this->GetAll() as $sponsor) { ?>
			<div class="row">
				<div class="col-md-4 p-b-30">
					<!--Carousel-->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active" style="max-height:300px; min-height:300px">
				      <img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$sponsor->getImage(0); ?>" style="height:300px" alt="First slide">
				    </div>
						<?php if (array_key_exists(1,$sponsor->GetImages())) {?>
						<div class="carousel-item" style="max-height:300px; min-height:300px">
							<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$sponsor->getImage(1); ?>" style="height:300px" alt="Second Slide">
						</div>
					<?php } ?>
						<?php if (array_key_exists(2,$sponsor->GetImages())) {?>
						<div class="carousel-item" style="max-height:300px; min-height:300px">
							<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$sponsor->getImage(2); ?>" style="height:300px" alt="Third slide">
						</div>
					<?php } ?>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<!-- Fin Carousel-->
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						<?php echo $sponsor->getName(); ?>
					</h3>

					<p class="p-b-28">
						<?php echo $sponsor->getDescription(); ?>
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
						</p>

						<span class="s-text7">
						</span>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</section>

<?php

		include_once('footer.php');

 ?>
