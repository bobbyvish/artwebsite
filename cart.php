<?php require_once('inc/db.php');?>
<?php require_once('functions/functions.php');?>

<!DOCTYPE html>
<?php require_once('inc/top.php');?>

<body>
    <?php require_once('inc/header.php');?>
    <?php cart() ?>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">

                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td class="remo">Remove</td>
                            <td></td>
                        </tr>
                    </thead>
                    <?php 
                    $ip_add=getIp();
                    
                    $total=0;
                    $select_price="select * from cart where ip_add='$ip_add'";
                    $run_price=mysqli_query($con, $select_price);
                    while($record=mysqli_fetch_array($run_price))
                    {
                       $pd_id=$record['p_id'];
                        $pro_price="select * from products where p_id='$pd_id'";
                        $run_pro_price=mysqli_query($con,$pro_price);
                        while($pd_prices=mysqli_fetch_array($run_pro_price))
                        {
                            $pd_price=array($pd_prices['p_price']);
                           $pd_title=$pd_prices['p_title'];
                            $pd_image1=$pd_prices['p_image1'];
                            $p_price=$pd_prices['p_price'];
                            $values=array_sum($pd_price);
                            
                            $total+=$values;
                     
                 //   echo $total;
                    ?>
                    <tbody>
                        <tr>

                            <td class="cart_product">
                                <a href=""><img src="<?php echo "admin/product_image/$pd_image1"?>" height="100" width="100" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo  $pd_title ?></a></h4>
                                <p><?php echo  $pd_id ?></p>
                            </td>
                            <td class="cart_price">
                                <p><?php echo  $p_price ?>₹</p>
                            </td>
                            <td class="cart_quantity">

                                <!--	<a class="cart_quantity_up" href=""> + </a>-->
                                <input class="cart_quantity_input" type="text" name="quantity" value=""  size="2">
                                <?php 
                                    if(isset($_POST['update']))
                                    {
                                        $qty=$_POST['quantity'];
                                        $update_qty="update cart set qty='$qty' where ip_add='$ip_add'";
                                        $run_qty=mysqli_query($con,$insert_qty);
                                        $total=$total*$qty;
                                    }
                              
                                    ?>
                                <!--	<a class="cart_quantity_down" href=""> - </a>-->

                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo  $p_price ?>₹</p>
                            </td>
                            <td>
                                <input type="checkbox" name="remove[]" value="<?php echo $pd_id; ?>">
                            </td>
                        </tr>
                        <?php }} ?>


                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>

                            <li>Total <span><?php echo  $total ?>₹</span></li>
                        </ul>

                        <a class="btn btn-default check_out" href="cart.php?update" >Update</a>
                        <a class="btn btn-default check_out" href="index.php" name="continue">Continue</a>
                        <a class="btn btn-default check_out" href="checkout.php">Check Out</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->
    <?php
                        if(isset($_POST['update']))
                        {
                            foreach($_POST['remove'] as $remove_id)
                            {
                                $delete_pd="delete from cart where p_id='$remove_id'";
                             $run_delete=mysqli_query($con,$delete_pd);
                                if($run_delete)
                                {
                                    echo "<script>window.open('cart.php','_self')</script>";
                                }
                            }
  }
                                
 ?>
    <?php require_once('inc/footer.php');?>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
