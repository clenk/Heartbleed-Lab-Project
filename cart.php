<?php
include('session.php');
include('product.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | O-Fruit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--<link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">-->
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
</head><!--/head-->

<body>
	<?php
	include('header.php');
	?>

	<section id="cart_items">
		<div class="container">
			<!--<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>-->
			<h1>Shopping Cart</h1>
			<?php
			if (!isset($_SESSION['cart'])) {
				echo "<h2>Cart is Empty</h2>";
			} else {
			?>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<!--<td class="total">Total</td>-->
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($_SESSION['cart'] as $prod) {
							echo "<tr>";
							echo '<td class="cart_product">';
								echo '<a href=""><img src="images/fruit/product'.$prod.'.jpg" alt=""></a>';
							echo '</td>';
							echo '<td class="cart_description">';
								echo '<h4><a href="">'.$products[$prod-1]->name.'</a></h4>';
								//echo '<p>Web ID: 1089772</p>';
							echo '</td>';
							echo '<td class="cart_price">';
								echo '<p>'.$products[$prod]->price.'</p>';
							echo '</td>';
							//echo '<td class="cart_total">';
							//	echo '<p class="cart_total_price">$59</p>';
							//echo '</td>';
							echo '<td class="cart_delete">';
								echo '<a class="cart_quantity_delete" cid="'.($prod-1).'"><i class="fa fa-times"></i></a>';
							echo '</td>';
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
			<?php
			}
			?>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<!--<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>-->
				<h3>Where is the Checkout?</h3>
				<p>If we were a real store, there would be a button here to checkout and give us your payment information. However, we are not set up to take your money at this time. We apologize for the inconvenience.</p>
			</div>
			<!--<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>-->
		</div>
	</section><!--/#do_action-->

	<?php
	include('footer.php');
	?>
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

   <script type="text/javascript">
    $(".cart_delete a").click(function(e) {
    	id = $(e.currentTarget).attr("cid");
		$.ajax({
		    url: "cart_update.php",
		    data: 'a=rem&cid=' + id,
		    type: "POST"
		});
		window.location.href = "cart.php";
    });
    </script>
</body>
</html>