<?php

		include_once('nav-bar.php');

 ?>


	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php echo IMG_PATH; ?>heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Women
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<form action="<?php echo FRONT_ROOT;?>Product/listProductsByFilter2" method="POST">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>
						<ul class="p-b-54" style="margin-left:30px;">
							<li class="p-t-4">
								<a href="<?php echo FRONT_ROOT;?>Product/listAll" class="s-text13 active1">
									All
								</a>
							</li>

							<div class="form-check" >
							<input class="form-check-input" type="checkbox" name="category[Women]" id="category1" value="mujer">
							<label class="form-check-label" for="category1">
								Women
							</label><br>
							</div>

							<div class="form-check" >
							<input class="form-check-input" type="checkbox" name="category[Hombre]" id="category2" value="hombre">
							<label class="form-check-label" for="category2">
								Men
							</label><br>
							</div>

							<div class="form-check" >
							<input class="form-check-input" type="checkbox" name="category[Kid]" id="category3" value="ninio">
							<label class="form-check-label" for="category3">
								Kid
							</label><br>
							</div>

							<div class="form-check" >
							<input class="form-check-input" type="checkbox" name="category[Adult]" id="category4" value="adulto">
							<label class="form-check-label" for="category4">
								Adult
							</label><br>
							</div>
						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Price
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar">

								</div><br>
								<div style="margin-left:30px;">
									<div class="form-check" >
									<input class="form-check-input" type="checkbox" name="filtros[Zapatillas]" id="exampleRadios1" value="Zapatillas">
									<label class="form-check-label" for="exampleRadios1">
										Zapatillas
									</label><br>
									</div>
									<div class="form-check" >
									<input class="form-check-input" type="checkbox" name="filtros[Remeras]" id="exampleRadios2" value="Remeras">
									<label class="form-check-label" for="exampleRadios2">
										Remeras
									</label><br>
									</div>
									<div class="form-check" >
									<input class="form-check-input" type="checkbox" name="filtros[Jeans]" id="exampleRadios3" value="Jeans">
									<label class="form-check-label" for="exampleRadios3">
										Jeans
									</label><br>
									</div>
								</div>
									<div class="filter-color p-t-22 p-b-50 bo3">
										<div class="m-text15 p-b-12">
											Color
										</div>

										<ul class="flex-w">
											<li class="m-r-10">
												<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
												<label class="color-filter color-filter1" for="color-filter1"></label>
											</li>

											<li class="m-r-10">
												<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
												<label class="color-filter color-filter2" for="color-filter2"></label>
											</li>

											<li class="m-r-10">
												<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
												<label class="color-filter color-filter3" for="color-filter3"></label>
											</li>

											<li class="m-r-10">
												<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
												<label class="color-filter color-filter4" for="color-filter4"></label>
											</li>

											<li class="m-r-10">
												<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
												<label class="color-filter color-filter5" for="color-filter5"></label>
											</li>

											<li class="m-r-10">
												<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
												<label class="color-filter color-filter6" for="color-filter6"></label>
											</li>

											<li class="m-r-10">
												<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
												<label class="color-filter color-filter7" for="color-filter7"></label>
											</li>
										</ul>
									</div>

									<div class="flex-sb-m flex-w p-t-16">
										<div class="w-size11">
											<!-- Button -->
											<button type="submit" class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
												Filter
											</button>
										</div>
							<!--			<div class="s-text3 p-t-10 p-b-10">
											Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
										</div> -->
									</div>
								</div>


							</div>






					</div>
					</form>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">


					<!-- Product -->
					<div class="row">

						<?php $i = 0;
									foreach ($this->listaFilteredProduct as $product) { ?>
							<div class="col-sm-12 col-md-6 col-lg-4 p-b-50 hov-img-zoom2">
							<div id="carouselExampleControls<?php echo $i;?>" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active" style="max-height:300px; min-height:300px">
									<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$product->getImage(0); ?>" style="height:300px" alt="First slide">
								</div>
								<?php if (array_key_exists(1,$product->GetImages())) {?>
								<div class="carousel-item" style="max-height:300px; min-height:300px">
									<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$product->getImage(1); ?>" style="height:300px" alt="Second slide">
								</div>
							<?php } ?>
							<?php if (array_key_exists(2,$product->GetImages())) {?>
								<div class="carousel-item" style="max-height:300px; min-height:300px">
									<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$product->getImage(2); ?>" style="height:300px" alt="Third slide">
								</div>
							<?php } ?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls<?php echo $i;?>" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls<?php echo $i;?>" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<div class="block2-txt p-t-20" style="margin-top:-17px; font-weight:bold">
							<h5  style="text-align:center; font-weight:bold" class="block2-name dis-block s-text3 p-b-5">
								<?php echo $product->getName(); ?>
							</h5>

							<h5 class="block2-price m-text6 p-r-5" style="text-align:center; font-weight:bold">
								<?php echo "$".$product->getPrice(); ?>
							</h5>
						</div>
						</div>
						<?php $i= $i+1;} ?>


					 </div>



					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php

	include_once('footer.php')

 ?>
