<?php require_once('inc/db.php');?>
<?php require_once('functions/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/top.php');?>


<body>
    <?php require_once('inc/header.php');?>

<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="left-sidebar">
                        <div class="panel-group category-products" id="accordian">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h2>Manage Account</h2>
                                    <h4><a href="myaccount.php?my_orders">My Order</a></h4>
                                    <h4><a href="myaccount.php?edit_account">Edit My Account</a></h4>
                                    <h4><a href="myaccount.php?change_password">Change Password</a></h4>
                                    <h4><a href="myaccount.php?delete_account">Delete Account</a></h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-sm-7 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center"></h2>
                        <?php
                        getdefault();
                        if(isset($_GET['my_orders']))
                        {
                            include("my_orders.php");
                        }
                         if(isset($_GET['edit_account']))
                        {
                            include("edit_account.php");
                             
                        }
                       if(isset($_GET['change_password']))
                        {
                            include("change_password.php");
                             
                        }
                        if(isset($_GET['delete_account']))
                        {
                            include("delete_account.php");
                             
                        }
                        ?>




                    </div>
                </div>
            </div>
    </section>
 <?php require_once('inc/footer.php');?>


</body>

</html>
