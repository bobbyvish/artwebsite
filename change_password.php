       <div class="col-sm-7 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Change Password</h2>



                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Your Old Password</label>
                                <input type="text" class="form-control" name="old_pass" required>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="text" class="form-control" name="new_pass" required>
                            </div>
                           
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="text" class="form-control" name="con_pass" required>
                            </div>
                           
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg" name="submit">
                                    Update 
                                </button>

                            </div>
                        </form>
                        <br>
                  </div>
                </div>
<?php
if(isset($_POST['submit']))
{
    $c_email=$_SESSION['c_email'];
    $c_old=$_POST['old_pass'];
        $c_new=$_POST['new_pass'];

        $c_con_pass=$_POST['con_pass'];
    $sel_old_pass="select * from register where c_pass='$c_old'";
    $run_c_old_pass=mysqli_query($con,$sel_old_pass);
    $check_c_old_pass=mysqli_fetch_array($run_c_old_pass);
    if($check_c_old_pass==0)
    {
        echo "<script>alert('Sorry,your current password did not valid, Please try again')</script>";
        exit();
        
    }
    if($c_new!=$c_con_pass)
    {
        echo "<script>alert('Sorry,your new password did not match, Please try again')</script>";
        exit();
    }
    $update_pass="update register set c_pass='$c_new' where c_email='$c_email'";
    $run_pass=mysqli_query($con,$update_pass);
    if($run_pass)
    {
        echo "<script>alert('Your Password has been updated')</script>";
        "<script>window.open('myaccount?my_orders.php','_self')</script>";
    }
    

}


?>