<?php require_once('inc/db.php');?>
<?php require_once('functions/functions.php');
session_start();
?>

<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/logo.jpg" alt="" /></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                            if(!isset($_SESSION['c_email']))
                            {
                                echo "<li><a href='login.php'><i class='fa fa-user''></i>Account</a></li>";
                            }
                            else{
                                 
                                echo "<li><a ><i class='fa fa-user''></i>Welcome ".$_SESSION['c_email']." </a></li>";
                                echo "<li><a href='myaccount.php'><i class='fa fa-user''></i>MyAccount</a></li>";
                            }
                            ?>

                            <!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
                            <li><a href="cart.php"><b><?php items();?></b><i class="fa fa-shopping-cart"></i> Cart</a>₹<?php total_price();?></li>

                            <?php
                            if(!isset($_SESSION['c_email']))
                            {
                               echo "<li><a href='login.php'><i class='fa fa-lock'></i> login</a></li>";
                            }
                            else{
                                echo "<li><a href='logout.php'><i class='fa fa-lock'></i> Logout</a></li>";
                            }
                            
                             ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
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
                        <ul class="nav navbar-nav collapse navbar-collapse bold">
                            <?php getCategory(); ?>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form method="get" action="index.php" enctype="multipart/form-data">
                            <input type="text" placeholder="Search" name="usersearch" />
                            <button type="submit" class="btn btn-default" name="search" value="search">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->
