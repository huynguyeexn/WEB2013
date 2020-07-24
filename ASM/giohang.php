<!DOCTYPE html>
<html lang="vi">
<head>
	<?php include_once 'layout/layout.meta' ?>
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
					<span>Đăng nhập</span>
				</li>
			</ul>
		</div>
	</section>
	<section class="hn-page">
		<div class="container">
			<div class="hn-page-title">
				<h4>Thanh toán</h4>
			</div>
			<div class="row">
				<div class="col-12">
					<table class="table table-bordered table-thanhtoan">
						<thead>
							<tr>
								<th scope="col">Hình ảnh sản phẩm</th>
								<th scope="col">Tên sản phẩm</th>
								<th scope="col">Đơn giá</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Thành tiền</th>
								<th scope="col">Xóa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><a href=""><img style="max-height: 5rem; width: auto;" src="https://bizweb.dktcdn.net/100/109/381/products/8bga6dorkoto1zoom.jpg?v=1469632683513" alt=""></a></th>
								<td><a href="">Tủ quần áo hiện đại</a></td>
								<td><strong>1.800.000 đ</strong></td>
								<td><input type="number" min="1" max="9" step="1" value="1" class="ml-2"></td>
								<td><strong>1.800.000 đ</strong></td>
								<td><i class="fas fa-trash-alt"></i></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-6">
							<button class="btn-primary px-4 py-2">Tiếp tục mua hàng</button>
						</div>
						<div class="col-6">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td>Tạm tính</td>
										<td>1.800.000 đ</td>
									</tr>
									<tr>
										<td>Thành tiền</td>
										<td>1.800.000 đ</td>
									</tr>
								</tbody>
							</table>
							<button class="btn-primary px-4 py-2 w-100">Tiến hành thanh toán</button>
						</div>
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
</script>	
</html>