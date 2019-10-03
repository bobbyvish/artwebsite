<?php
require_once('inc/db.php');


$c=$_SESSION['c_email'];
$get_c="select * from register where c_email='$c'";
$run_c=mysqli_query($con,$get_c);
$row_c=mysqli_fetch_array($run_c);
$c_id=$row_c['c_id'];


        
?>
<center>
    <h1>My Orders</h1>

</center>
<hr>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>Order</td>
                <td>Due Amount</td>
                <td>Invoice NO</td>
                <td>Total Product</td>
                <td>Order Date</td>
                <td>Paid/Unpaid</td>
                <td>Status</td>
            </tr>
        </thead>
     
        <tbody>
        <?php
            
            $get_orders="select * from customer_orders where customer_id='$c_id'";
           $run_orders=mysqli_query($con,$get_orders);
            $i=0;
            while($row_orders=mysqli_fetch_array($run_orders))
            {
                $order_id=$row_orders['order_id'];
                 $customer_id=$row_orders['customer_id'];               

                $due_amount=$row_orders['due_amount'];
                
                $invoice_no=$row_orders['invoice_no'];
                $products=$row_orders['total_products'];
                $date=$row_orders['order_date'];
                $status=$row_orders['order_status'];
                $i++;
                if($status=='pending')
                {
                    $status='Unpaid';
                }
                else{
                    $status='Paid';
                }
            
            ?>
      <tr>
                <td><?php echo $i ;?></td>
                <td><?php echo $due_amount ;?></td>
                <td><?php echo $invoice_no ;?></td>
                <td><?php echo $products ;?></td>
                <td><?php echo $date ;?></td>
                <td><?php echo $status ;?></td>
                <td><a href="confirm.php?order_id=<?php echo $order_id; ?>"  class="btn btn-primary btn-sm">Confirm Paid</a></td>

            </tr>
            <?php
            }
            ?>
</tbody>

    </table>

</div>
