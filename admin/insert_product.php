<?php include('include/db.php');?>

<?php include('include/navbar.php');?>
<div class="container-fluid body-section">
    <div class="row">
        <?php include('include/sidebar.php');?>

        <div class="col-md-9">
            <h1><i class="fa fa-plus-square"></i>Add Product <small>Add New Product</small></h1>
            <hr>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <li class="active"><i class="fa fa-tachometer"></i>Add Product</li>

            </ol>
            <div class="row">
                <div class="col-xs-12">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <!-- Form Name -->
                            <legend>PRODUCTS</legend>
                            <div class="col-sm-5 clearfix form-one">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="pd_title">Product Title</label>
                                    <input id="pd_title" name="p_title" placeholder="" class="form-control input-md" required="" type="text">
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="pd_category">Category</label>
                                    <select id="pd_category" name="p_category" class="form-control" required="">
                                        <option>--select Categories--</option>
                                        <?php 
                                $get_cats="select * from categories";
                                $run_cats=mysqli_query($con, $get_cats);
                                    while ($row_cats=mysqli_fetch_array($run_cats)){
                                        $cat_id=$row_cats['cat_id'];
                                        $cat_title=$row_cats['cat_title'];
                                        
                                      echo    "<option value='$cat_id'>$cat_title</option>";
                                    }
                                 ?>

                                    </select>
                                </div>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="pd_brand">Brand</label>
                                    <select id="pd_brand" name="p_brand" placeholder="" class="form-control">
                                        <option>--Select Brands--</option>
                                        <?php
                            $get_brands="select * from brands";
                            $run_brands=mysqli_query($con,$get_brands);
                             while ($row_brands=mysqli_fetch_array($run_brands)){
                                        $brand_id=$row_brands['brand_id'];
                                        $brand_title=$row_brands['brand_title'];
                                        
                                        
                                     echo  "<option value='$brand_id'>$brand_title</option>"  ;

                                    }
                            
                            ?>
                                    </select>
                                </div>


                                <!-- File Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="filebutton">Image1</label>
                                    <input id="filebutton" name="p_image1" class="input-file" type="file" required="">

                                </div>
                                <!-- File Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="filebutton">Image2</label>
                                    <input id="filebutton" name="p_image2" class="input-file" type="file">
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="filebutton">Image3</label>
                                    <input id="filebutton" name="p_image3" class="input-file" type="file">
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="available_quantity">Price</label>
                                    <input id="available_quantity" name="p_price" placeholder="" class="form-control input-md" required="" type="text">
                                </div>



                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="pd_description">DESCRIPTION</label><br><br>
                                    <textarea class="form-control" id="product_description" name="p_description"></textarea>
                                </div>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="available_quantity">Product keyword</label>
                                    <input id="available_quantity" name="p_keyword" placeholder="" class="form-control input-md" required="" type="text">
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <button id="singlebutton" name="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        Copyright &copy; by <a href="#"></a>
    </footer>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });

</script>
</body>

</html>
<?php

if(isset($_POST['submit'])){
    //
    $p_title=$_POST['p_title'];
    $p_cat=$_POST['p_category'];
    $p_brand=$_POST['p_brand'];
    $p_price=$_POST['p_price'];
    $p_disc=$_POST['p_description'];
    $status='on';
     $p_keyword=$_POST['p_keyword'];

    //Insert image
  
        $p_image1=$_FILES['p_image1']['name'];
        $p_image2=$_FILES['p_image2']['name'];    
        $p_image3=$_FILES['p_image3']['name'];   
             
    //image temp name

    $temp_name1=$_FILES['p_image1']['tmp_name'];
    $temp_name2=$_FILES['p_image2']['tmp_name'];
    $temp_name3=$_FILES['p_image3']['tmp_name'];
    
    //inserting to database
    
    move_uploaded_file($temp_name1,"product_image/$p_image1");
    move_uploaded_file($temp_name2,"product_image/$p_image2");
    move_uploaded_file($temp_name2,"product_image/$p_image3");

    $insert_product="insert into products (cat_id,brand_id,p_date,p_title,p_image1,p_image2,p_image3,p_price,p_disc,p_status) values('$p_cat','$p_brand',NOW(),'$p_title','$p_image1','$p_image2','$p_image3','$p_price','$p_disc','$status')";
    
    
    $run_product=mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product inserted successfully')</script>";
    }
    else{
                echo "<script>alert('Product fail inserted ')</script>";

    }
    
    
    

}
?>
