<!DOCTYPE html>
<html lang="vi">

<head>
	<?php include_once 'layout/layout.meta' ?>
</head>

<body>
	<?php
	session_start();
	$conn = new PDO('mysql:host=localhost;dbname=WEB2013_asm;charset=utf8;charset=utf8', 'root', '123');

	$sql = 'SELECT * FROM PRODUCTS LIMIT 10';

	$products = $conn->query($sql);
	?>
	<!-- HEADER -->
	<?php include_once 'layout/layout-header.php' ?>
	<!-- END HEADER -->

	<!------------------------------------------>
	<!-- SLIDE -->
	<section class="hn-section-1">
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://dummyimage.com/1140x440/333333/ffffff/" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://dummyimage.com/1140x440/333333/ffffff/" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://dummyimage.com/1140x440/333333/ffffff/" alt="Third slide">
					</div>
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
		</div>
	</section>
	<!-- END SLIDE -->

	<!------------------------------------------>

	<!-- BANNER -->
	<section class="hn-section-2 d-none d-md-block">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-12 col-md-4">
					<div class="hn-banner">
						<img src="https://dummyimage.com/370x300/333333/ffffff/" alt="">
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="hn-banner">
						<img src="https://dummyimage.com/370x300/333333/ffffff/" alt="">
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="hn-banner">
						<img src="https://dummyimage.com/370x300/333333/ffffff/" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END BANNER -->

	<!------------------------------------------>

	<!-- PRODUCT + SIDE BAR -->
	<section class="hn-section-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="hn-side-bar">
						<div class="side-bar-title">
							<span>DANH MỤC SẢN PHẨM</span>
						</div>
						<div class="side-bar-list">
							<?php
							$categories = $conn->query('SELECT * FROM categories LIMIT 10');
							foreach ($categories as $category) {
								echo '
									<div class="side-bar-item ">
										<a href="">' . $category['category_name'] . '</a>
									</div>
									';
							};
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="product-box">
						<div class="hn-product-title">
							<h4>SẢN PHẨM NỔI BẬT</h4>
						</div>
						<div class="hn-product-slide">
							<div class="owl-carousel product-carousel owl-theme">
								<?php
								foreach ($products as $product) {
									echo '
									<div class="product-box-item">
									<div class="hn-product-item text-center">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<a href="giohang.php?add=' . $product['product_id'] . '">Thêm vào giỏ hàng</a>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="./images/product-images/' . $product['product_images'] . '" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php?id=' . $product['product_id'] . '">' . $product['product_name'] . '</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</div>
										<div class="item-price">		
											';
									if ($product['product_sale'] != 0) {
										echo '
											<div class="special-price">
												<span>' . $product['product_sale'] . '₫</span>
											</div>
											<div class="old-price">
											<span>' . $product['product_price'] . '₫</span>
											</div>';
									} else {
										echo '
											<div class="special-price">
												<span>' . $product['product_price'] . '₫</span>
											</div>
											<div class="old-price">
											<span></span>
											</div>';
									}


									echo '
										</div>
									</div>
									</div>';
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PRODUCT + SIDE BAR -->

	<!------------------------------------------>

	<!-- PRODUCT -->
	<section class="hn-section-4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-box">
						<div class="hn-product-title d-flex justify-content-between">
							<h4>NỘI THẤT PHÒNG KHÁCH</h4>
							<div class="hn-product-nav d-none d-md-block">
								<ul>
									<li class="active"><a href="">Bàn ghế gỗ</a></li>
									<li><a href="">Sofa phòng khách</a></li>
									<li><a href="">Tủ để giày</a></li>
								</ul>
							</div>
						</div>
						<div class="hn-product-slide">
							<div class="owl-carousel product-carousel owl-theme">

								<?php

								$sql = '';

								$products = $conn->query('SELECT * FROM PRODUCTS WHERE CATEGORY_ID=1 LIMIT 10');
								foreach ($products as $product) {
									echo '
									<div class="product-box-item">
									<div class="hn-product-item text-center">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<a href="giohang.php?add=' . $product['product_id'] . '">Thêm vào giỏ hàng</a>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="./images/product-images/' . $product['product_images'] . '" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php?id=' . $product['product_id'] . '">' . $product['product_name'] . '</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>
										</div>
										<div class="item-price">		
											';
									if ($product['product_sale'] != 0) {
										echo '
											<div class="special-price">
												<span>' . $product['product_sale'] . '₫</span>
											</div>
											<div class="old-price">
											<span>' . $product['product_price'] . '₫</span>
											</div>';
									} else {
										echo '
											<div class="special-price">
												<span>' . $product['product_price'] . '₫</span>
											</div>
											<div class="old-price">
											<span></span>
											</div>';
									}


									echo '
										</div>
									</div>
									</div>';
								}
								?>
								<!-- <div class="product-box-item">
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PRODUCT -->

	<!------------------------------------------>

	<!-- PRODUCT -->
	<section class="hn-section-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-box">
						<div class="hn-product-title d-flex justify-content-between">
							<h4>NỘI THẤT PHÒNG NGỦ</h4>
							<div class="hn-product-nav d-none d-md-block">
								<ul>
									<li class="active"><a href="">Bàn ghế gỗ</a></li>
									<li><a href="">Sofa phòng khách</a></li>
									<li><a href="">Tủ để giày</a></li>
								</ul>
							</div>
						</div>
						<div class="hn-product-slide">
							<div class="owl-carousel product-carousel owl-theme">
								<div class="product-box-item">
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PRODUCT -->

	<!------------------------------------------>

	<!-- PRODUCT -->
	<section class="hn-section-6">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-box">
						<div class="hn-product-title d-flex justify-content-between">
							<h4>NỘI THẤT PHÒNG KHÁCH</h4>
							<div class="hn-product-nav d-none d-md-block">
								<ul>
									<li class="active"><a href="">Bàn ghế gỗ</a></li>
									<li><a href="">Sofa phòng khách</a></li>
									<li><a href="">Tủ để giày</a></li>
								</ul>
							</div>
						</div>
						<div class="hn-product-slide">
							<div class="owl-carousel product-carousel owl-theme">
								<div class="product-box-item">
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PRODUCT -->

	<!------------------------------------------>

	<!-- PRODUCT -->
	<section class="hn-section-7">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-box">
						<div class="hn-product-title d-flex justify-content-between">
							<h4>NỘI THẤT PHÒNG NGỦ</h4>
							<div class="hn-product-nav d-none d-md-block">
								<ul>
									<li class="active"><a href="">Bàn ghế gỗ</a></li>
									<li><a href="">Sofa phòng khách</a></li>
									<li><a href="">Tủ để giày</a></li>
								</ul>
							</div>
						</div>
						<div class="hn-product-slide">
							<div class="owl-carousel product-carousel owl-theme">
								<div class="product-box-item">
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="sale">
											<span>-90%</span>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="hn-product-item text-center ">
										<div class="hn-button-wrap justify-content-center">
											<div class="hn-product-button">
												<span>Mua hàng</span>
											</div>
											<div class="hn-product-button">
												<span>Xem thêm</span>
											</div>
										</div>
										<div class="item-thumb">
											<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
										</div>
										<div class="item-title">
											<a href="sanpham.php">Tủ quần áo hiện đại</a>
										</div>
										<div class="item-star">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
											<i class="far fa-star"></i>

										</div>
										<div class="item-price">
											<div class="special-price">
												<span>1.800.000₫</span>
											</div>
											<div class="old-price">
												<span>
													1.900.000₫
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PRODUCT -->

	<!------------------------------------------>

	<!-- NEWSLETTER -->
	<section class="hn-section-8">
		<div class="hn-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="hn-newsletter-title">
							<h3>ĐĂNG KÝ NHẬN <span>TƯ VẤN MIỄN PHÍ</span></h3>
						</div>
						<div class="hn-newsletter-text">
							<p>Bạn là khách hàng, lớn hay nhỏ, muốn được hỗ trợ, tư vấn, xin vui lòng gửi email cho chúng tôi để được hỗ trợ tốt nhất!</p>
						</div>
						<div class="hn-newsletter-form">
							<input type="text" placeholder="Email của bạn"><button>ĐĂNG KÝ</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END NEWSLETTER -->

	<!------------------------------------------>

	<!-- PRODUCT + BANNER -->
	<section class="hn-section-9">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-box">
						<div class="hn-product-title d-flex justify-content-between">
							<h4>NHÀ THÔNG MINH</h4>
						</div>
						<div class="row">
							<div class=" col-0 col-lg-3">
								<div class="product-box-image d-none d-lg-block">
									<a href=""><img src="https://dummyimage.com/270x300/333333/ffffff/"" alt=""></a>
							</div>
						</div>
						<div class=" col-12 col-lg-9">
										<div class="hn-product-slide">
											<div class="owl-carousel product-carousel owl-theme">
												<div>
													<div class="hn-product-item text-center ">
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="item-thumb">
															<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
														</div>
														<div class="item-title">
															<a href="">Tủ quần áo hiện đại</a>
														</div>
														<div class="item-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>

														</div>
														<div class="item-price">
															<div class="special-price">
																<span>1.800.000₫</span>
															</div>
															<div class="old-price">
																<span>
																	1.900.000₫
																</span>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="hn-product-item text-center ">
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="item-thumb">
															<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
														</div>
														<div class="item-title">
															<a href="">Tủ quần áo hiện đại</a>
														</div>
														<div class="item-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>

														</div>
														<div class="item-price">
															<div class="special-price">
																<span>1.800.000₫</span>
															</div>
															<div class="old-price">
																<span>
																	1.900.000₫
																</span>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="hn-product-item text-center ">
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="sale">
															<span>-90%</span>
														</div>
														<div class="item-thumb">
															<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
														</div>
														<div class="item-title">
															<a href="">Tủ quần áo hiện đại</a>
														</div>
														<div class="item-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>

														</div>
														<div class="item-price">
															<div class="special-price">
																<span>1.800.000₫</span>
															</div>
															<div class="old-price">
																<span>
																	1.900.000₫
																</span>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="hn-product-item text-center ">
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="item-thumb">
															<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
														</div>
														<div class="item-title">
															<a href="">Tủ quần áo hiện đại</a>
														</div>
														<div class="item-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>

														</div>
														<div class="item-price">
															<div class="special-price">
																<span>1.800.000₫</span>
															</div>
															<div class="old-price">
																<span>
																	1.900.000₫
																</span>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="hn-product-item text-center ">
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="sale">
															<span>-90%</span>
														</div>
														<div class="item-thumb">
															<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
														</div>
														<div class="item-title">
															<a href="">Tủ quần áo hiện đại</a>
														</div>
														<div class="item-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>

														</div>
														<div class="item-price">
															<div class="special-price">
																<span>1.800.000₫</span>
															</div>
															<div class="old-price">
																<span>
																	1.900.000₫
																</span>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="hn-product-item text-center ">
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="sale">
															<span>-90%</span>
														</div>
														<div class="item-thumb">
															<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
														</div>
														<div class="item-title">
															<a href="">Tủ quần áo hiện đại</a>
														</div>
														<div class="item-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>

														</div>
														<div class="item-price">
															<div class="special-price">
																<span>1.800.000₫</span>
															</div>
															<div class="old-price">
																<span>
																	1.900.000₫
																</span>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="hn-product-item text-center ">
														<div class="hn-button-wrap justify-content-center">
															<div class="hn-product-button">
																<span>Mua hàng</span>
															</div>
															<div class="hn-product-button">
																<span>Xem thêm</span>
															</div>
														</div>
														<div class="item-thumb">
															<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
														</div>
														<div class="item-title">
															<a href="">Tủ quần áo hiện đại</a>
														</div>
														<div class="item-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="far fa-star"></i>
															<i class="far fa-star"></i>

														</div>
														<div class="item-price">
															<div class="special-price">
																<span>1.800.000₫</span>
															</div>
															<div class="old-price">
																<span>
																	1.900.000₫
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- END PRODUCT + BANNER -->

	<!------------------------------------------>

	<!-- REVIEW -->
	<section class="hn-section-10">
		<div class="hn-review">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="hn-review-slide">
							<div id="hn-review-carousel" class="owl-carousel">
								<div>
									<div class="hn-review-box d-flex justify-content-center">
										<div class="hn-review-avartar">
											<img src="https://dummyimage.com/100x100/333333/ffffff/"" alt="">
									</div>
									<div class=" hn-review-info">
											<h4>NGUYỄN TRỌNG HIẾU</h4>
											<p>Chung cư Timecity</p>
										</div>
									</div>
									<div class="hn-review-text">
										<p>Khi mua căn hộ mới, tôi đã liên hệ và tìm đơn vị thi công cùng cung cấp nội thất hỗ trợ. Thật may khi tìm được Megashop, các bạn làm việc nhiệt tình, sản phẩm cung cấp tôi rất</p>
									</div>
								</div>
								<div>
									<div class="hn-review-box d-flex justify-content-center">
										<div class="hn-review-avartar">
											<img src="https://dummyimage.com/100x100/333333/ffffff/"" alt="">
									</div>
									<div class=" hn-review-info">
											<h4>Nguyễn Văn Nguyễn</h4>
											<p>Căn hộ tập thể Giảng Võ</p>
										</div>
									</div>
									<div class="hn-review-text">
										<p>Khi mua căn hộ mới, tôi đã liên hệ và tìm đơn vị thi công cùng cung cấp nội thất hỗ trợ. Thật may khi tìm được Megashop, các bạn làm việc nhiệt tình, sản phẩm cung cấp tôi rất</p>
									</div>
								</div>
								<div>
									<div class="hn-review-box d-flex justify-content-center">
										<div class="hn-review-avartar">
											<img src="https://dummyimage.com/100x100/333333/ffffff/"" alt="">
									</div>
									<div class=" hn-review-info">
											<h4>Hoàng Thái Hậu</h4>
											<p>Nhà liên cư Cổ Nhuế</p>
										</div>
									</div>
									<div class="hn-review-text">
										<p>Khi mua căn hộ mới, tôi đã liên hệ và tìm đơn vị thi công cùng cung cấp nội thất hỗ trợ. Thật may khi tìm được Megashop, các bạn làm việc nhiệt tình, sản phẩm cung cấp tôi rất</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END REVIEW -->

	<!------------------------------------------>

	<!-- NEWS -->
	<section class="hn-section-11">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-box">
						<div class="hn-product-title d-flex justify-content-between">
							<h4>TIN MỚI</h4>
						</div>
						<div class="hn-product-slide">
							<div class="owl-carousel news-carousel owl-theme">
								<div class="hn-news-box">
									<div class="news-image">
										<img src="images/huunhan-news-1.jpg" alt="">
									</div>
									<div class="hn-news-content">
										<div class="hn-news-title">
											<h6><a href="/nguoi-dung-chuong-noi-that-sach-chuan-chau-au" title="Người dùng chuộng nội thất sạch, chuẩn châu Âu">Người dùng chuộng nội thất sạch, chuẩn châu Âu</a></h6>
										</div>
										<div class="hn-news-text">
											<p>Người dùng chuộng nội thất sạch, chuẩn châu Âu
												Nội thất chuẩn châu Âu là một khái niệm được nhắc đến nhiều trong thời gian gần đây Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias repellat quasi, ea maxime explicabo deleniti suscipit, totam sed officia ex illum nobis dolores consequuntur dolorem repellendus quisquam voluptatem sapiente illo?,...</p>
											<button><a href="">Xem thêm</a></button>
										</div>
									</div>
								</div>
								<div class="hn-news-box">
									<div class="news-image">
										<img src="images/huunhan-news-1.jpg" alt="">
									</div>
									<div class="hn-news-content">
										<div class="hn-news-title">
											<h6><a href="/nguoi-dung-chuong-noi-that-sach-chuan-chau-au" title="Người dùng chuộng nội thất sạch, chuẩn châu Âu">Người dùng chuộng nội thất sạch, chuẩn châu Âu</a></h6>
										</div>
										<div class="hn-news-text">
											<p>Người dùng chuộng nội thất sạch, chuẩn châu Âu
												Nội thất chuẩn châu Âu là một khái niệm được nhắc đến nhiều trong thời gian gần đây Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias repellat quasi, ea maxime explicabo deleniti suscipit, totam sed officia ex illum nobis dolores consequuntur dolorem repellendus quisquam voluptatem sapiente illo?,...</p>
											<button><a href="">Xem thêm</a></button>
										</div>
									</div>
								</div>
								<div class="hn-news-box">
									<div class="news-image">
										<img src="images/huunhan-news-1.jpg" alt="">
									</div>
									<div class="hn-news-content">
										<div class="hn-news-title">
											<h6><a href="/nguoi-dung-chuong-noi-that-sach-chuan-chau-au" title="Người dùng chuộng nội thất sạch, chuẩn châu Âu">Người dùng chuộng nội thất sạch, chuẩn châu Âu</a></h6>
										</div>
										<div class="hn-news-text">
											<p>Người dùng chuộng nội thất sạch, chuẩn châu Âu
												Nội thất chuẩn châu Âu là một khái niệm được nhắc đến nhiều trong thời gian gần đây Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias repellat quasi, ea maxime explicabo deleniti suscipit, totam sed officia ex illum nobis dolores consequuntur dolorem repellendus quisquam voluptatem sapiente illo?,...</p>
											<button><a href="">Xem thêm</a></button>
										</div>
									</div>
								</div>
								<div class="hn-news-box">
									<div class="news-image">
										<img src="images/huunhan-news-1.jpg" alt="">
									</div>
									<div class="hn-news-content">
										<div class="hn-news-title">
											<h6><a href="/nguoi-dung-chuong-noi-that-sach-chuan-chau-au" title="Người dùng chuộng nội thất sạch, chuẩn châu Âu">Người dùng chuộng nội thất sạch, chuẩn châu Âu</a></h6>
										</div>
										<div class="hn-news-text">
											<p>Người dùng chuộng nội thất sạch, chuẩn châu Âu
												Nội thất chuẩn châu Âu là một khái niệm được nhắc đến nhiều trong thời gian gần đây Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias repellat quasi, ea maxime explicabo deleniti suscipit, totam sed officia ex illum nobis dolores consequuntur dolorem repellendus quisquam voluptatem sapiente illo?,...</p>
											<button><a href="">Xem thêm</a></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END NEWS -->

	<!------------------------------------------>

	<!-- PARTNER -->
	<section class="hn-section-12">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="product-box">
						<div class="hn-product-title d-flex justify-content-between">
							<h4>ĐỐI TÁC</h4>
						</div>
						<div class="hn-product-slide">
							<div class="owl-carousel partner-carousel owl-theme">
								<div class="partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
							<div class=" partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
							<div class=" partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
							<div class=" partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
							<div class=" partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
							<div class=" partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
							<div class=" partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
							<div class=" partner">
									<img src="https://dummyimage.com/175x70/333333/ffffff/"" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
			<!-- END PARTNER -->

<!------------------------------------------>

			<!-- MAP -->
<?php include_once 'layout/layout.map' ?>
			<!-- END MAP -->

<!------------------------------------------>

			<!-- FOLLOW -->
<?php include_once 'layout/layout.follow' ?>
			<!-- END FOLLOW -->

<!------------------------------------------>

			<!-- FOOTER -->
<?php include_once 'layout/layout.footer' ?>
			<!-- END FOOTER -->

<!------------------------------------------>

			<!-- COPYRIGHT -->
<?php include_once 'layout/layout.copyright' ?>
			<!-- END COPYRIGHT -->

<!------------------------------------------>

</body>

<!-- jquery.slim.min.js -->
<script src=" js/jquery-3.4.0.slim.min.js"> </script> <!-- jquery -->
									<script src="js/jquery-3.4.0.min.js"></script>
									<!-- fancybox script -->
									<script src="js/jquery.fancybox.min.js"></script>
									<!-- popper js -->
									<script src="js/popper.min.js"></script>
									<!-- bootstrap.min.js -->
									<script src="js/bootstrap_js/bootstrap.min.js"></script>

									<!-- owlcarousel -->
									<script src="owlcarousel/owl.carousel.min.js"></script>


									<script>
										//carousel script
										$(".partner-carousel").owlCarousel({
											loop: !1,
											margin: 10,
											responsiveClass: !0,
											responsive: {
												0: {
													items: 1,
													nav: !1
												},
												360: {
													items: 2,
													nav: !1
												},
												760: {
													items: 3,
													nav: !0
												},
												1000: {
													items: 5,
													nav: !0
												},
												1200: {
													items: 6,
													nav: !0,
													loop: !1
												}
											}
										}), $(".news-carousel").owlCarousel({
											loop: !1,
											margin: 10,
											responsiveClass: !0,
											responsive: {
												0: {
													items: 1,
													nav: !1
												},
												480: {
													items: 2,
													nav: !0
												},
												768: {
													items: 3,
													nav: !0
												},
												1024: {
													items: 4,
													nav: !0,
													loop: !1
												}
											}
										}), $("#hn-review-carousel").owlCarousel({
											autoplay: !0,
											autoplayTimeout: 5e3,
											loop: !0,
											margin: 0,
											items: 1
										}), $(".owl-carousel").owlCarousel({
											loop: !1,
											margin: 10,
											responsiveClass: !0,
											responsive: {
												0: {
													items: 2,
													nav: !1
												},
												480: {
													items: 3,
													nav: !0
												},
												768: {
													items: 4,
													nav: !0
												},
												1024: {
													items: 4,
													nav: !0,
													loop: !1
												}
											}
										});

										// dropdown script
										$('.dropdown-toggle').dropdown({
											flip: false
										})
										$(document).ready(function() {
											$('.dropdown a.drop').on("click", function(e) {
												$(this).next('ul').toggle();
												e.stopPropagation();
												e.preventDefault();
											});
										});
									</script>

</html>