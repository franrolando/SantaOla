<?php

	include_once('nav-bar.php');

 ?>


	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1 homeimages">
				<?php foreach ($this->getCarouselImages() as $carouselELement) { ?>
					<div class="item-slick1 item1-slick1 homeimages" style="background-image: url(<?php echo FRONT_ROOT.$carouselELement->getName();?>);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
								Santa Ola Surfshop
							</span>

							<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
								Novedades
							</h2>

							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
								<!-- Button -->
								<a href="<?php if ($carouselELement->getType() == "producto")
		              								echo FRONT_ROOT."Product/listAll";
		            							else
										              if ($carouselELement->getType() == "raider")
										                echo FRONT_ROOT."Sponsor/listSponsors";
										              else
										                if ($carouselELement->getType() == "evento")
										                  echo FRONT_ROOT."Event/listEvents";
		               ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
									Ver
								</a>
							</div>
						</div>
					</div>
			<?php } ?>

			</div>
		</div>
	</section>

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto" >
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30" style="height:100%; padding:3%">
						<img src="<?php echo IMG_PATH;?>hombre.jpg" class="img-fluid rounded" alt="IMG-BENNER" style="height:100%">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?php echo FRONT_ROOT."Product/listCat/Hombre" ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Hombre
							</a>
						</div>
					</div>


				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30" style="height:100%; padding:3%">
						<img src="<?php echo IMG_PATH;?>tablas.jpg" class="img-fluid rounded" alt="IMG-BENNER" style="height:100%">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?php echo FRONT_ROOT;?>Product/listProductsByFilter/Tabla" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Tablas
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30" style="height:100%; padding:3%">
						<img src="<?php echo IMG_PATH;?>mujer.jpg" class="img-fluid rounded" alt="IMG-BENNER" style="height:100%">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?php echo FRONT_ROOT."Product/listCat/Mujer" ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Mujer
							</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- New Product -->
	<?php if (!empty($this->GetAllNews())) {?>
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Artículos Nuevos
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php $i = 0;
					 foreach ($this->GetAllNews() as $newProd) { ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50 hov-img-zoom2" style="min-width:300px">
						<div id="carouselExampleControls<?php echo $i;?>" class="carousel slide block2-labelnew" style="margin-top:10px" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active" style="max-height:300px; min-height:300px">
								<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$newProd->getImage(0); ?>" style="height:300px" alt="First slide">
							</div>
							<?php if (array_key_exists(1,$newProd->GetImages())) {?>
							<div class="carousel-item" style="max-height:300px; min-height:300px">
								<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$newProd->getImage(1); ?>" style="height:300px" alt="Second slide">
							</div>
						<?php } ?>
						<?php if (array_key_exists(2,$newProd->GetImages())) {?>
							<div class="carousel-item" style="max-height:300px; min-height:300px">
								<img class="d-block w-100 img-responsive" src="<?php echo FRONT_ROOT.$newProd->getImage(2); ?>" style="height:300px" alt="Third slide">
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
					<div class="block2-txt p-t-20">
						<h5 href="#" style="text-align:center; font-weight:bold" class="block2-name dis-block s-text3 p-b-5">
							<?php echo $newProd->getName(); ?>
						</h5>

						<h5 style="text-align:center; font-weight:bold" class="block2-price m-text6 p-r-5">
							<?php echo "$".$newProd->getPrice(); ?>
						</h5>
					</div>
					</div>
				<?php $i++;} ?>



				</div>
			</div>

		</div>
	</section>
<?php } ?>

	<!-- Banner2
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="<?php echo IMG_PATH;?>banner-08.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								The Beauty
							</span>

							<h3 class="l-text1 fs-35-sm">
								Lookbook
							</h3>

							<a href="#" class="s-text4 hov2 p-t-20 ">
								View Collection
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
						<img src="<?php echo IMG_PATH;?>shop-item-09.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
							<div class="t-center">
								<a href="product-detail.php" class="dis-block s-text3 p-b-5">
									Gafas sol Hawkers one
								</a>

								<span class="block2-oldprice m-text7 p-r-5">
									$29.50
								</span>

								<span class="block2-newprice m-text8">
									$15.90
								</span>
							</div>

							<div class="flex-c-m p-t-44 p-t-30-xl">
								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										69
									</span>

									<span class="s-text5">
										days
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										04
									</span>

									<span class="s-text5">
										hrs
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										32
									</span>

									<span class="s-text5">
										mins
									</span>
								</div>

								<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>

									<span class="s-text5">
										secs
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		-->

<!--
	 Blog
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our Blog
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					 Block3
					<div class="block3">
						<a href="blog-detail.php" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo IMG_PATH;?>blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.php" class="m-text11">
									Black Friday Guide: Best Sales & Discount Codes
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					 Block3
					<div class="block3">
						<a href="blog-detail.php" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo IMG_PATH;?>blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.php" class="m-text11">
									The White Sneakers Nearly Every Fashion Girls Own
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					 Block3
					<div class="block3">
						<a href="blog-detail.php" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo IMG_PATH;?>blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.php" class="m-text11">
									New York SS 2018 Street Style: Annina Mislin
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>     -->

	<!-- Instagram -->
<!--
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				@ Síganos en Instagram
			</h3>
		</div>

		<div class="flex-w">
			<!-- Block4
			<div class="block4 wrap-pic-w">
				<img src="<?php echo IMG_PATH;?>gallery-03.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4
			<div class="block4 wrap-pic-w">
				<img src="<?php echo IMG_PATH;?>gallery-07.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4
			<div class="block4 wrap-pic-w">
				<img src="<?php echo IMG_PATH;?>gallery-09.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4
			<div class="block4 wrap-pic-w">
				<img src="<?php echo IMG_PATH;?>gallery-13.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			<!-- Block4
			<div class="block4 wrap-pic-w">
				<img src="<?php echo IMG_PATH;?>gallery-15.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>
		</div>
	</section>
-->

	<!-- Shipping
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery Worldwide
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					SHOP open from Monday to Sunday
				</span>
			</div>
		</div>
	</section>   -->


	<?php

		include_once('footer.php');

	 ?>
