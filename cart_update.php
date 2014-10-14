<?php
	include('session.php');
	include('product.php');


	// Add item to cart
	if (isset($_POST['a']) && $_POST['a'] == 'add' && isset($_POST['pid'])) {
		// Create cart if it doesn't exist
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = array();
		}

		$pid = $_POST['pid'];
		$_SESSION['cart'][] = $pid;

	}

	// Remove item from cart
	if (isset($_POST['a']) && $_POST['a'] == 'rem' && isset($_POST['cid'])) {
		$cid = $_POST['cid'];
		unset($_SESSION['cart'][$cid]);
	}
?>