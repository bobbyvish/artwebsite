<?php require_once('inc/db.php');?>
<?php require_once('functions/functions.php');?>

<!DOCTYPE html>
<?php require_once('inc/top.php');?>

<body>
    <?php require_once('inc/header.php');?>

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
            <!--/breadcrums-->
        
            <!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <p><b>
                            <h2>REGISTER ACCOUNT</h2>
                        </b></p>
                    <br>
                    <div class="col-sm-10 clearfix form-one">
 
                        
                           <h3> <p>
                                Your Personal Details
                            </p></h3>
                           <form action="" method="POST">
                            
                                <input type="text" placeholder="First Name *" name="fname" required>
                                <input type="text" placeholder="Last Name *" required name="lname">
                                <input type="text" placeholder="Email*" required name="email">
                                <input type="text" placeholder="Phone *" required name="phone">

                                <tr>
                                    <td colspan="1"><select name="gender" id="gender" required>
                                            <option value="">--Select Gender-- </option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </td>
                                </tr>
                                <br><br>
                                <tr>
                                    <td colspan="1"><input type="text" placeholder="Birth date" name="birth" id="dob" value="" class="hasDatepicker">
                                    </td>
                                </tr>
                                <input type="password" placeholder="Password *" required name="password">
                                <input type="cpassword" placeholder="Confirm Password *" required name="cpassword">
                            
                        
                       
                          <h3>  <p>
                                Your Address Details
                            </p></h3>
                            
                                <input type="text" placeholder="Address 1 *" required name="address">
                                <input type="text" placeholder="City" name="city">
                                <input type="code" placeholder="Postal code" name="pcode">
                       
                     
                            
               

                    
              
                <button type="submit" class="btn btn-primary" name="register">Register</button>
               
                <br><br>
                </form>
            </div>
                </div>

        </div>
    </section>
      <?php
    
    if(isset($_POST['register']))
    {
        $c_fname=$_POST['fname'];
        $c_lname=$_POST['lname'];
        $c_email=$_POST['email'];
        $c_phone=$_POST['phone'];
        $c_gender=$_POST['gender'];
        $c_birth=$_POST['birth'];
        $c_password=$_POST['password'];
        $c_address=$_POST['address'];
        $c_city=$_POST['city'];
        $c_pcode=$_POST['pcode'];
        $c_ip=getIp();
        
        $insert_customer="insert into register(c_fname,c_lname,c_email,c_phone,c_gender,c_birth,c_pass,c_address,c_city,c_pcode,c_ip) values('$c_fname','$c_lname','$c_email','$c_phone','$c_gender','0','$c_password','$c_address','$c_city','$c_pcode','$c_ip')";

        $run_customer=mysqli_query($con,$insert_customer);
        
      //  $sel_cart="select  * from cart where ip_add='$c_ip'";
      //  $run_cart=mysqli_query($con,$sel_cart);
      //  $check_cart=mysqli_num_rows($run_cart);
        if($run_customer){
            
     echo "<script>alert('registeration successfull')</script>";
            
        
        }
        
    }
            
?>
    <!--/#cart_items-->

<?php require_once('inc/footer.php');?>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
