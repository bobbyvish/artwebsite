<?php 
require_once('inc/db.php');
require_once('functions/functions.php');

?>

<!DOCTYPE html>
<?php require_once('inc/top.php');?>

<body>
	<?php require_once('inc/header.php');?>

<?php
    if(!isset($_SESSION['c_email']))
    {
        include("login.php");
    }
    else{
        include("payment.php");
    }
    
    $c_ip=getIp();
    $c=$_SESSION['c_email'];
    $get_customer="select * from register where c_email='$c'";
    $run_customer=mysqli_query($con,$get_customer);
    $customer=mysqli_fetch_array($run_customer);
    $c_id=$customer['c_id'];
   
    
     ?>
           <div class="container">
            <div class="row">
               <h2>Payment Options For You</h2>
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        
                     <a href="#"> <img src="images/paypal.png" alt="">  </a>
                       
                    </div>
                    <!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">
                        <!--sign up form-->
                        <a href="order.php?c_id=<?php echo $c_id;?>"><h3>Pay Offline</h3></a>
                        
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
        <br><br>
     
                    
                        
                     
	<?php require_once('inc/footer.php');?>



    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>