<?php require_once('inc/db.php');?>
<?php require_once('functions/functions.php');?>

<?php
if(isset($_GET['pd_id']))
            {
             $pd_id=$_GET['pd_id'];
                
                        $get_products="select * from products where p_id='$pd_id'";
                        $run_products=mysqli_query($con,$get_products);
                        while($row_products=mysqli_fetch_array($run_products))
                        {
                            $pd_id=$row_products['p_id'];
                            $pd_title=$row_products['p_title'];
                            $pd_cat=$row_products['cat_id'];
                            $pd_brand=$row_products['brand_id'];
                            $pd_desc=$row_products['p_disc'];
                            $pd_price=$row_products['p_price'];
                            $pd_image1=$row_products['p_image1'];
                            $pd_image2=$row_products['p_image2'];
                            $pd_image3=$row_products['p_image3'];
                            
                        }
    
                      $get_brand="select * from brands where brand_id='$pd_brand'";
                        $run_brand=mysqli_query($con,$get_brand);
                       while($row_brand=mysqli_fetch_array($run_brand))
                        {
                            $brand_title=$row_brand['brand_title'];
                        }
}




?>
<!DOCTYPE html>
<?php require_once('inc/top.php');?>

<body>
    <?php require_once('inc/header.php');?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-12 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src=<?php echo "admin/product_image/$pd_image1"?> alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
 <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->

                                <p><b>Title:</b><h2><?php echo "$pd_title";?></h2></p>
                                <p><b>Product Id:</b> <?php echo "$pd_id";?></p>
                                <img src="" alt="" />
                                <span>
                                    <span><?php echo "₹$pd_price";?></span>
                                    	
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </span>
                                <p><b>Availability:</b> In Stock</p>
                                
                                <p><b>Brand:</b><?php echo "$brand_title";?></p>
                                
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li  class="active"><a href="#discription" data-toggle="tab">Discription</a></li>
                             
                                <li><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade  active in" id="discription">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                
                              <h2> <p><b><?php echo "$pd_desc";?></b></p></h2> 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="tab-pane fade" id="companyprofile">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="tab-pane fade" id="tag">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>

                            <div class="tab-pane fade" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>rocky</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>good product</b></p>

                                    <form action="#">
                                        <span>
                                            <input type="text" placeholder="Your Name" />
                                            <input type="email" placeholder="Email Address" />
                                        </span>
                                        <textarea name=""></textarea>
                                        <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/category-tab-->

                  </div>
            </div>
    </section>

    <footer id="footer">
        <!--Footer-->

        <?php require_once('inc/footer.php');?>

</body>

</html>
