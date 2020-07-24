<!DOCTYPE html>
<html lang="vi">
<head>
	<?php include_once 'layout/layout.meta'?>
</head>
<body style="background-color: #ffffff">
	<!-- HEADER -->
	<?php include_once 'layout/layout.header' ?>
	<!-- END HEADER -->

	<!------------------------------------------>

	<section class="breadcrumbs">
		<div class="container">
			<ul>
				<li>
					<a href="index.php">Trang chủ</a>
					<i class="fas fa-chevron-right"></i>
				</li>
				<li>
					<span>Giới thiệu</span>
				</li>
			</ul>
		</div>
	</section>
	<section class="hn-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<?php include_once 'layout/layout.side-bar' ?>
					<div class="side-filter">
						<div class="filter-title">
							<span>Giả sản phẩm</span>
						</div>
						<div class="filter-price">
							<p><input type="radio" name="price" id=""> Dưới 100.000đ</p>
							<p><input type="radio" name="price" id=""> 100.000đ - 200.000đ</p>
							<p><input type="radio" name="price" id=""> 200.000đ - 300.000đ</p>
							<p><input type="radio" name="price" id=""> 300.000đ - 500.000đ</p>
							<p><input type="radio" name="price" id=""> 500.000đ - 1.000.000đ</p>
							<p><input type="radio" name="price" id=""> 1.000.000đ - 2.000.000đ</p>
						</div>
					</div>
					<div class="side-filter">
						<div class="filter-title">
							<span>Thương hiệu</span>
						</div>
						<div class="filter-price">
							<p><input type="radio" name="brand" id=""> Thương hiệu</p>
							<p><input type="radio" name="brand" id=""> Thương hiệu</p>
							<p><input type="radio" name="brand" id=""> Thương hiệu</p>
							<p><input type="radio" name="brand" id=""> Thương hiệu</p>
							<p><input type="radio" name="brand" id=""> Thương hiệu</p>
							<p><input type="radio" name="brand" id=""> Thương hiệu</p>
							<p><input type="radio" name="brand" id=""> Thương hiệu</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="hn-sort-bar">
						<div class="row">
							<div class="col-md-6">
								<i class="grid-menu fas fa-th"></i>
								<i class="list-menu fas fa-th-list"></i>
							</div>
							<div class="col-md-6 text-right">
								<div class="hn-sort-by">
									<span>Thứ tự</span>
									<select>
										<option>Mặc định</option>
										<option>A > Z</option>
										<option>Z > A</option>
										<option>Giá tăng dần</option>
										<option>Giá giảm dần</option>
										<option>Hàng mới nhất</option>
										<option>Hàng cũ nhất</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="hn-grid row">
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-4">
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
						</div>
					</div>
					<div class="d-none hn-list row text-center text-md-left">
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-5">
									
									<div class="item-thumb">
										<div class="sale">
											<span>-90%</span>
										</div>
										<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
									</div>
								</div>
								<div class="col-12 col-md-7">
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
									<div class="hn-button-wrap w-100">
										<div class="hn-product-button">
											<span>Mua hàng</span>
										</div>
										<div class="hn-product-button">
											<span>Xem thêm</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-5">
									
									<div class="item-thumb">
										<div class="sale">
											<span>-90%</span>
										</div>
										<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
									</div>
								</div>
								<div class="col-12 col-md-7">
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
									<div class="hn-button-wrap w-100">
										<div class="hn-product-button">
											<span>Mua hàng</span>
										</div>
										<div class="hn-product-button">
											<span>Xem thêm</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-5">
									
									<div class="item-thumb">
										<div class="sale">
											<span>-90%</span>
										</div>
										<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
									</div>
								</div>
								<div class="col-12 col-md-7">
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
									<div class="hn-button-wrap w-100">
										<div class="hn-product-button">
											<span>Mua hàng</span>
										</div>
										<div class="hn-product-button">
											<span>Xem thêm</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-5">
									
									<div class="item-thumb">
										<div class="sale">
											<span>-90%</span>
										</div>
										<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
									</div>
								</div>
								<div class="col-12 col-md-7">
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
									<div class="hn-button-wrap w-100">
										<div class="hn-product-button">
											<span>Mua hàng</span>
										</div>
										<div class="hn-product-button">
											<span>Xem thêm</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-12 col-md-5">
									
									<div class="item-thumb">
										<div class="sale">
											<span>-90%</span>
										</div>
										<img src="https://dummyimage.com/240x160/333333/ffffff/" alt="">
									</div>
								</div>
								<div class="col-12 col-md-7">
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
									<div class="hn-button-wrap w-100">
										<div class="hn-product-button">
											<span>Mua hàng</span>
										</div>
										<div class="hn-product-button">
											<span>Xem thêm</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination">
						<ul>
							<!-- <li><a href=""><i class="fas fa-angle-double-left"></i></a></li> -->
							<li><a href="" class="active">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">5</a></li>
							<li><a href=""><i class="fas fa-angle-double-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


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
<script src="js/jquery-3.4.0.slim.min.js"></script>
<!-- jquery -->
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
	$(".partner-carousel").owlCarousel({loop:!1,margin:10,responsiveClass:!0,responsive:{0:{items:1,nav:!1},360:{items:2,nav:!1},760:{items:3,nav:!0},1000:{items:5,nav:!0},1200:{items:6,nav:!0,loop:!1}}}),$(".news-carousel").owlCarousel({loop:!1,margin:10,responsiveClass:!0,responsive:{0:{items:1,nav:!1},480:{items:2,nav:!0},768:{items:3,nav:!0},1024:{items:4,nav:!0,loop:!1}}}),$("#hn-review-carousel").owlCarousel({autoplay:!0,autoplayTimeout:5e3,loop:!0,margin:0,items:1}),$(".owl-carousel").owlCarousel({loop:!1,margin:10,responsiveClass:!0,responsive:{0:{items:2,nav:!1},480:{items:3,nav:!0},768:{items:4,nav:!0},1024:{items:4,nav:!0,loop:!1}}});

	// dropdown script
	$('.dropdown-toggle').dropdown({
		flip:false
	})
	$(document).ready(function(){
		$('.dropdown a.drop').on("click", function(e){
			$(this).next('ul').toggle();
			e.stopPropagation();
			e.preventDefault();
		});
	});

	$(document).ready(function(){
		$(".list-menu").click(function(){
			$(".hn-grid").removeClass("d-flex").addClass("d-none");
			$(".hn-list").removeClass("d-none").addClass("d-flex");
		});
		$(".grid-menu").click(function(){
			$(".hn-list").removeClass("d-flex").addClass("d-none");
			$(".hn-grid").removeClass("d-none").addClass("d-flex");
		});
	});
</script>	
</html>