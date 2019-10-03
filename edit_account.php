<?php
@session_start();

require_once('inc/db.php');

 if(isset($_GET['edit_account'])){
    $c_email=$_SESSION['c_email'];
    $get_customer="select * from register where c_email='$c_email'";
    $run_customer=mysqli_query($con,$get_customer);
    $row=mysqli_fetch_array($run_customer);
    $id=$row['c_id'];
    $fname=$row['c_fname'];
    $lname=$row['c_lname'];
    $email=$row['c_email'];
    $phone=$row['c_phone'];
    $gender=$row['c_gender'];
    $pass=$row['c_pass'];
    $address=$row['c_address'];
    $city=$row['c_city'];
    $p_code=$row['c_pcode'];
 }
?>


          <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-10 clearfix form-one">
 
                         <h2>Edit ACCOUNT</h2>
                           <h3> <p>
                                Your Personal Details
                            </p></h3>
                           <form action="" method="post">
                            
                                <input type="text"  name="fname" value="<?php echo $fname;?>" >
                                <input type="text"  required name="lname" value="<?php echo $lname;?>">
                                <input type="text" name="email" value="<?php echo $email;?>">
                                <input type="text"  name="phone" value="<?php echo $phone;?>">

                                <br>
                                <input type="password"  name="password" value="<?php echo $pass;?>">
                            <h3>  <p>
                                Your Address Details
                            </p></h3>
                            
                                <input type="text" name="address" value="<?php echo $address;?>">
                                <input type="text"  name="city" value="<?php echo $city;?>">
                                <input type="code"  name="pcode" value="<?php echo $p_code;?>">
                       
                 <button type="submit" class="btn btn-primary" name="update_account">Update</button>
               <br><br>
                </form>
            </div>
                </div>

        </div>
        <?php
         if(isset($_POST['update_account'])){
             $update_id=$id;
             $c_fname=$_POST['fname'];
             $c_lname=$_POST['lname'];
             $c_email=$_POST['email'];
             $c_pass=$_POST['password'];
             $c_address=$_POST['address'];
             $c_city=$_POST['city'];
             $c_pcode=$_POST['pcode'];
             $update_c="update register set c_fname='$c_fname', c_lname='$c_lname', c_email='$c_email', c_pass='$c_pass',
             c_address='$c_address', c_city='$c_city', c_pcode='$c_pcode' where customer_id='$update_id'";
             $run_c=mysqli_query($con,$update_c);
             if($run_c){
                 
                 echo "<script>alert('Your account is updated')</script>";
                 echo "<script>window.open('my_account.php','_self')</script>";
             }
             
         }





?>
 