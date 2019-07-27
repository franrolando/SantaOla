<?php

	include('header.php');

 ?>

<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://www.facebook.com/SantaOlasurfshop/" target="_blank" rel="noopener noreferrer" class="topbar-social-item fa fa-facebook"></a>
					<a href="https://www.instagram.com/santaola_mdp/" target="_blank" rel="noopener noreferrer" class="topbar-social-item fa fa-instagram"></a>
			<!--		<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>  -->
			<!--		<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
				</div>

				<span class="topbar-child1">
					Bienvenidos
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						santaola@gmail.com
					</span>

			<!--		<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div> -->
				</div>
			</div>

			<div class="wrap_header hoverini" style="background-color:#f5f5f5">
				<!-- Logo -->
				<a href="<?php echo FRONT_ROOT;?>" class="logo" style="font-size: 32px">
					<img src="<?php echo FRONT_ROOT.VIEWS_PATH; ?>images/icons/logo.png" class="img-responsive" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="<?php echo FRONT_ROOT; ?>">HOME</a>
						<!--		<ul class="sub_menu">
									<li><a href="index.php">Homepage V1</a></li>
									<li><a href="home-02.php">Homepage V2</a></li>
									<li><a href="home-03.php">Homepage V3</a></li>
								</ul>	-->
							</li>

							<li>
								<a href="" onclick="return false;">CATEGORÍAS</a>
								<ul class="sub_menu">
									<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Hombre">HOMBRE</a></li>
									<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Mujer">MUJER</a></li>
									<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Adulto">ADULTO</a></li>
									<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Ninio">NIÑO</a></li>
								</ul>
							</li>


							<li>
								<a href="<?php echo FRONT_ROOT ?>Product/listAll">SHOP</a>
							</li>

							<li>
								<a href="<?php echo FRONT_ROOT ?>Product/listCat/mujer">WOMEN</a>
							</li>


					<!--		<li class="sale-noti">
								<a href="product.php">Sale</a>
							</li>	-->

							<!--				<li>
								<a href="cart.php">Features</a>
							</li>
							-->
							<li>
								<a href="<?php echo FRONT_ROOT ?>Event/listEvents">EVENTOS</a>
							</li>

							<li>
								<a href="<?php echo FRONT_ROOT ?>Sponsor/listSponsors">RAIDERS</a>
							</li>

							<li>
								<a href="<?php echo FRONT_ROOT; ?>NavBar/Contact">UBICACION</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						 Header cart noti
				<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									 Button
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									 Button
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>  -->
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="<?php echo FRONT_ROOT.VIEWS_PATH; ?>images/icons/logo.png" class="img-responsive" alt="IMG-LOGO" style="">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">


				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Bienvenidos
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								santaola@gmail.com
							</span>

		<!--					<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>	-->
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="https://www.facebook.com/SantaOlasurfshop/" target="_blank" rel="noopener noreferrer" class="topbar-social-item fa fa-facebook"></a>
							<a href="https://www.instagram.com/santaola_mdp/" target="_blank" rel="noopener noreferrer" class="topbar-social-item fa fa-instagram"></a>
					<!--		<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>  -->
					<!--		<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo FRONT_ROOT; ?>">Home</a>

					</li>

					<li class="item-menu-mobile">
						<a href="product.php" onclick="return false;">CATEGORIAS</a>
						<ul class="sub-menu">
							<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Hombre">HOMBRE</a></li>
							<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Mujer">MUJER</a></li>
							<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Adulto">ADULTO</a></li>
							<li><a href="<?php echo FRONT_ROOT ?>Product/listCat/Ninio">NIÑO</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo FRONT_ROOT ?>Product/listAll">SHOP</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo FRONT_ROOT ?>Product/listCat/mujer">WOMEN</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo FRONT_ROOT ?>Sponsor/listSponsors">RAIDERS</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo FRONT_ROOT ?>Event/listEvents">EVENTOS</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo FRONT_ROOT; ?>NavBar/Contact">UBICACION</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
