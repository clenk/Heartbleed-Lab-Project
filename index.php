<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | O-Fruit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
       
    
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
	<?php
	include('header.php');
	?>
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>NEW</span> SHIPMENT!</h1>
									<h2>Berries Now Available</h2>
									<p>So delicious.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/fruit/berries.jpg" class="girl img-responsive" alt="" />	
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>SOLD OUT</span></h1>
									<h2>All Out Of Watermelon</h2>
									<p>None left.</p>
								</div>
								<div class="col-sm-6">
								  <img src="images/fruit/watermelon.jpg" class="girl img-responsive" alt="" />	
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>NEW</span> SHIPMENT!</h1>
									<h2>Oranges Now On Sale</h2>
									<p>Orange you glad?</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
								  <img src="images/fruit/oranges.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	
	<?php
	include('footer.php');
	?>
	

  
    <script type="text/javascript">
    	$(".get").click(function() {location.href='shop.php';});
    </script>
</body>
</html>