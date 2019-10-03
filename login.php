<!DOCTYPE html>
<?php require_once('inc/top.php');
require_once('inc/db.php');
require_once('functions/functions.php');

?>

<body>
    <?php require_once('inc/header.php');?>
    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <h2>Login to your account</h2>
                        <form action="login.php" method="post">
                            <input type="email" name="c_email" placeholder="Email" />
                            <input type="password" name="c_pass" placeholder="Password" />
                           
                            <br>
                            <a href="#">forgot password</a><br>
                            <button type="submit" class="btn btn-default" name="login">Login</button>
                        </form>
                    </div>
                    <!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">
                        <!--sign up form-->
                        <h2>New Customer!</h2>
                        <form action="#">
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>

                            <button type="submit" class="btn btn-default"><a href='register.php'>Continue</a></button>
                        </form>
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
    <!--/form-->
    <?php
    if(isset($_POST['login']))
    {
        $c_email=$_POST['c_email'];
        $c_pass=$_POST['c_pass'];
        $sel_customer="select * from register where c_email='$c_email' AND c_pass='$c_pass'";
        $run_customer=mysqli_query($con,$sel_customer);
        $check_customer=mysqli_num_rows($run_customer);
        $getip= getIp();
        $sel_cart="select * from cart where ip_add='$getip'";
        $run_cart=mysqli_query($con,$sel_cart);
        $check_cart=mysqli_num_rows($run_cart);
        if($check_customer==0){
            echo "<script>alert('Email or Password is wrong, try again!!!')</script>";
            exit();
        }
        if($check_customer==1 AND $check_cart==0)
        {
            $_SESSION['c_email']=$c_email;
            echo "<script>alert('you are logged in')</script>";
            echo "<script>window.open('myaccount.php','_self')</script>";
        }
        else{
            $_SESSION['c_email']=$c_email;
            echo "<script>alert('you are logged in')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    
    
    
    ?>

    <?php require_once('inc/footer.php');?>


    <script src="js/jquery.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
