<?php require_once('inc/db.php');
require_once('functions/functions.php');

if(isset($_GET['order_id']))
{
    $order_id=$_GET['order_id'];
}
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
                        <h2 class="title text-center">Please confirm your Payment</h2>



                        <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Invoice No:</label>
                                <input type="text" class="form-control" name="invoice_no" required>
                            </div>
                            <div class="form-group">
                                <label>Amount Sent:</label>
                                <input type="text" class="form-control" name="amount_sent" required>
                            </div>
                            <div class="form-group">
                                <label>Select Payment Mode:</label>
                                <select name="payment_mode" class="form-control">
                                    <option>Select Payment Mode</option>
                                    <option>Bank Transfer</option>
                                    <option>paypal</option>
                                    <option>Paytm</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Payment Date:</label>
                                <input type="text" class="form-control" name="payment_date" required>
                            </div>
                            <div class="form-group">
                                <label>Transaction/Reference Id:</label>
                                <input type="text" class="form-control" name="ref_no" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-lg" name="confirm_payment">
                                    Confirm Payment
                                </button>

                            </div>
                        </form>
                        <br>
                        <?php
                        if(isset($_POST['confirm_payment']))
                        {
                            $update_id=$_GET['update_id'];
                            $invoice_no=$_POST['invoice_no'];
                            $amount=$_POST['amount_sent'];
                            $payment_mode=$_POST['payment_mode'];
                            $date=$_POST['payment_date'];
                            $ref_no=$_POST['ref_no'];
                            $complete="Complete";
                            $insert_payment="insert into payments(invoice,amount,payment_mode,ref_no,payment_date) values('$invoice_no','$amount','$payment_mode','$ref_no','$date')";
                            $run_payment=mysqli_query($con,$insert_payment);
                            $update_customer_order="update customer_orders set order_status='$complete' where order_id='$update_id'";
                            $run_customer_order=mysqli_query($con,$update_customer_order);
                            $update_pending_order="update pending_orders set order_status='$complete' where order_id='$update_id'";
                            $run_pending_order=mysqli_query($con,$update_pending_order);
                            if($run_pending_order){
                                echo "<script>alert('Thank you for Purchasing ')</script>";
                                 echo "<script>window.open('myaccount.php?my_orders','_self')</script>";
                            }
                        }
        
                        
                        ?>





                    </div>
                </div>
            </div>
    </section>
    <?php require_once('inc/footer.php');?>


</body>

</html>
