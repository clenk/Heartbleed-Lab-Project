
	
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->

        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.php"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <?php
                                    if (explode('/', parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH))[2] == "login.php") {
                                        if (isset($_GET["action"]) && $_GET["action"] == "register") {
                                           echo '<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>';
                                        }
                                        else {
                                            echo '<li><a href="login.php?action=register"><i class="fa fa-user"></i> Register</a></li>';
                                        }
                                    }
                                    else {
                                        if (!empty($_SESSION['user_name']) && ($_SESSION['user_is_logged_in'])) {
                                            echo '<li><a href="login.php?action=logout"><i class="fa fa-lock"></i> Logout</a></li>';
                                        }
                                    else {
                                            echo '<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>';
                                            echo '<li><a href="login.php?action=register"><i class="fa fa-user"></i> Register</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php" class="active">Home</a></li>
                                <li class="dropdown"><a href="shop.php">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
                                        <li><a href="cart.php">Cart</a></li>  
                                    </ul>
                                </li> 
                                <li><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

