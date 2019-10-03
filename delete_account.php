<center>
    <h1>Do you really want to Delete Your Account</h1>
    <form action="" method="post">
        <input type="submit" name="yes" value="Yes, I want to delete" class="btn btn-danger"><br>
        <input type="submit" name="no" value="No, I Don't want to delete" class="btn btn-primary">
    </form>
</center>
<?php
$c_email=$_SESSION['c_email'];
if(isset($_POST['yes']))
{
    $delete_customer="delete from register where c_email='$c_email'";
    $run_delete=mysqli_query($con,$delete_customer);
    if($run_delete)
    {
        session_destroy();
        echo "<script>alert('Successfully deleted your account')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
if(isset($_POST['no'])){
    echo "<script>window.open('myaccount.php?my_orders','_self')</script>";
}
?>