<?php
require_once('inc/db.php');
require_once('functions/functions.php');
//Getting customer id
if(isset($_GET['c_id'])){
    $c_id=$_GET['c_id'];
    echo $c_id ;
}

//getting product details
 $ip_add=getIp();
   
    $total=0;
    $select_price="select * from cart where ip_add='$ip'";
    $run_price=mysqli_query($con, $select_price);
$status='pending';
$invoice_no=mt_rand();
$count_pro=mysqli_num_rows($run_price);
    while($record=mysqli_fetch_array($run_price))
    {
       $pd_id=$record['p_id'];
        $pro_price="select * from products where p_id='$pd_id'";
        $run_pro_price=mysqli_query($con,$pro_price);
        while($pd_price=mysqli_fetch_array($run_pro_price))
        {
            $pd_price=array($pd_price['p_price']);
            $values=array_sum($pd_price);
            $total+=$values;
        }
           
    }

//Getting quaintity from th cart
$get_cart="select * from cart";
$run_cart=mysqli_query($con,$get_cart);
$get_qty=mysqli_fetch_array($run_cart);
$qty=$get_qty['qty'];
if($qty==0){
    $qty=1;
    $sub_total=$total;
}
else{
    $qty=$qty;
    $sub_total=$total*$qty;
    
}
$insert_order="insert into customer_orders (customer_id,due_amount,invoice_no,total_products,order_date,order_status) values('$c_id','$sub_total','$invoice_no','$count_pro',NOW(),'$status')";
$run_order=mysqli_query($con,$insert_order);

    echo "<script>alert('order successfully submitted, Thanks!')</script>";
    echo "<script>window.open('myaccount.php','_self')</script>";
    
    $empty_cart="delete from cart where ip_add='$ip'";
    $run_empty=mysqli_query($con,$empty_cart);
    
    $insert_to_pending_orders="insert into pending_orders (customer_id,invoice_no,product_id,qty,order_status) values ('$c_id','$invoice_no','$pd_id','$qty','$status')";
     $run_pending_order=mysqli_query($con,$insert_to_pending_orders);   
        


?>
