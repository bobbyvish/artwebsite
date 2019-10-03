<?php

 $con=mysqli_connect("localhost","root","","arthub");



function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

function getCategory()   //function for fetching category
{
    global $con;
    $get_cats="select * from categories";
                                $run_cats=mysqli_query($con, $get_cats);
                                    while ($row_cats=mysqli_fetch_array($run_cats)){
                                        $cat_id=$row_cats['cat_id'];
                                        $cat_title=$row_cats['cat_title'];
                                        
                                        
                                     echo    "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";

                                    }
    
}

function getBrands()
{
    global $con;
    $get_brands="select * from brands";
                            $run_brands=mysqli_query($con,$get_brands);
                             while ($row_brands=mysqli_fetch_array($run_brands)){
                                        $brand_id=$row_brands['brand_id'];
                                        $brand_title=$row_brands['brand_title'];
                                        
                                        
                                     echo    
                                         
                                         "<h4><a href='index.php?brands=$brand_id'>$brand_title</h4></a>";

                                    }
}

function getProduct()  //funtion for fetching  product
{
    global $con;
    if(!isset($_GET['cat'])){
        if(!isset($_GET['brands'])){
            if(!isset($_GET['search']))
            {
             
                        $get_products="select * from products order by rand() LIMIT 0,6";
                        $run_products=mysqli_query($con,$get_products);
                        while($row_products=mysqli_fetch_array($run_products)){
                            $pd_id=$row_products['p_id'];
                            $pd_title=$row_products['p_title'];
                            $pd_cat=$row_products['cat_id'];
                            $pd_brand=$row_products['brand_id'];
                            $pd_desc=$row_products['p_disc'];
                            $pd_price=$row_products['p_price'];
                            $pd_image=$row_products['p_image1'];
                            
                            echo 
                                "
                                <div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
										<div class='productinfo text-center'>
											<img src='admin/product_image/$pd_image' alt='' />
											<h2>₹$pd_price</h2>
											<p>$pd_title</p>
                                            <a href='product-details.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>

											<a href='cart.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
										</div>
										<div class='product-overlay'>
											<div class='overlay-content'>
												<h2>₹$pd_price</h2>
												<p>$pd_title</p>
                                                <a href='product-details.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>
												<a href='cart.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
                                ";
                            
                        }
            }
        }
    }
                        
}


function getCategoryProduct()  //funtion for fetching category product
{
    global $con;
    if(isset($_GET['cat'])){
        $cat_id=$_GET['cat'];
                        $get_products="select * from products  where cat_id='$cat_id' ";
                        $run_products=mysqli_query($con,$get_products);
       
                       $count =mysqli_num_rows($run_products);
        if($count==0)
        {
            echo "<h2>No Product available of this category</h2>";
        }
        while($row_products=mysqli_fetch_array($run_products)){
                            $pd_id=$row_products['p_id'];
                            $pd_title=$row_products['p_title'];
                            $pd_cat=$row_products['cat_id'];
                            $pd_brand=$row_products['brand_id'];
                            $pd_desc=$row_products['p_disc'];
                            $pd_price=$row_products['p_price'];
                            $pd_image=$row_products['p_image1'];
                            
                            echo 
                                "
                                <div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
										<div class='productinfo text-center'>
											<img src='admin/product_image/$pd_image' alt='' />
											<h2>₹$pd_price</h2>
											<p>$pd_title</p>
                                            <a href='product-details.php' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>

											<a href='cart.php' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
										</div>
										<div class='product-overlay'>
											<div class='overlay-content'>
												<h2>₹$pd_price</h2>
												<p>$pd_title</p>
                                                <a href='product-details.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>
												<a href='cart.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
                                ";
                            
                        
        }
    }
                        
}


function getBrandProduct()  //funtion for fetching brand product
{
    global $con;
    if(isset($_GET['brands'])){
        $brand_id=$_GET['brands'];
                        $get_products="select * from products  where brand_id='$brand_id' ";
                        $run_products=mysqli_query($con,$get_products);
                         $count=mysqli_num_rows($run_products);
        if($count==0)
        {
            echo "<h2>No Product available of this brand</h2>";
        } while($row_products=mysqli_fetch_array($run_products)){
                            $pd_id=$row_products['p_id'];
                            $pd_title=$row_products['p_title'];
                            $pd_cat=$row_products['cat_id'];
                            $pd_brand=$row_products['brand_id'];
                            $pd_desc=$row_products['p_disc'];
                            $pd_price=$row_products['p_price'];
                            $pd_image=$row_products['p_image1'];
                            
                            echo 
                                "
                                <div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
										<div class='productinfo text-center'>
											<img src='admin/product_image/$pd_image' alt='' />
											<h2>₹$pd_price</h2>
											<p>$pd_title</p>
                                            <a href='product-details.php' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>

											<a href='cart.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
										</div>
										<div class='product-overlay'>
											<div class='overlay-content'>
												<h2>₹$pd_price</h2>
												<p>$pd_title</p>
                                                <a href='product-details.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>
												<a href='cart.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
                                ";
                            
                        
        }
    }
                        
}


function searchProduct()
{
    global $con;
    if(isset($_GET['search']))
    {
        $usersearch=$_GET['usersearch'];
     $get_products="select * from products where p_keyword like '%$usersearch%'";
                        $run_products=mysqli_query($con,$get_products);
                        while($row_products=mysqli_fetch_array($run_products))
                        {
                            $pd_id=$row_products['p_id'];
                            $pd_title=$row_products['p_title'];
                            $pd_cat=$row_products['cat_id'];
                            $pd_brand=$row_products['brand_id'];
                            $pd_desc=$row_products['p_disc'];
                            $pd_price=$row_products['p_price'];
                            $pd_image=$row_products['p_image1'];
                            
                            echo 
                                "
                                <div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
										<div class='productinfo text-center'>
											<img src='admin/product_image/$pd_image' alt='' />
											<h2>₹$pd_price</h2>
											<p>$pd_title</p>
                                            <a href='product-details.php' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>

											<a href=cart.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
										</div>
										<div class='product-overlay'>
											<div class='overlay-content'>
												<h2>₹$pd_price</h2>
												<p>$pd_title</p>
                                                <a href='product-details.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-details'></i>Details</a>
												<a href='cart.php?pd_id=$pd_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
                                ";
                }
                        
        }
}

function productDetails()  //funtion for fetching  product
{
    global $con;
   
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
                            $pd_image=$row_products['p_image1'];
                            
                            
                            
                        }
            
    
    }
                        
}
function cart() //creating cart
        {
            global $con;
            if(isset($_GET['pd_id'])){

                        $ip_add=getIp();
                        $p_id=$_GET['pd_id'];
                        $check_pro="select * from cart where p_id='$p_id'";
                        $run_check=mysqli_query($con,$check_pro);
                        if(mysqli_num_rows($run_check)>0){
                        echo "<script>alert('This Product already added in your cart')</script>";

                }
                        else{
                        $insert_cart="insert into cart(p_id,ip_add,qty) values('$p_id','$ip_add','1')";
                        $run_cart=mysqli_query($con,$insert_cart);
                        echo "<script>
                            window.open('index.php', '_self')
                        </script>";
                }

            }

        }




function items()   //getting the no item from the cart
{
    global $con;
    if(isset($_GET['pd_id'])){
          $ip_add=getIp();
        $get_items="select * from cart where ip_add='$ip_add'";
        $run_items=mysqli_query($con,$get_items);
        $count_items=mysqli_num_rows($run_items);
            
    }
    else{
          $ip_add=getIp();
        $get_items="select * from cart where ip_add='$ip_add'";
        $run_items=mysqli_query($con,$get_items);
        $count_items=mysqli_num_rows($run_items);
            
    }
    echo $count_items;
}


function total_price()     // getting total rice of the cart
{
    $ip_add=getIp();
    global $con;
    $total=0;
    $select_price="select * from cart where ip_add='$ip_add'";
    $run_price=mysqli_query($con, $select_price);
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
    echo $total;
}

//getting the defaults for customer
function getdefault(){
    global $con;
    $c=$_SESSION['c_email'];
    $get_c="select * from register where c_email='$c'";
    $run_c=mysqli_query($con,$get_c);
    while($row_c=mysqli_fetch_array($run_c)){
        $customer_id=$row_c['c_id'];
        if(!isset($_GET['my_ordes'])){        
            if(!isset($_GET['edit_account'])){
        if(!isset($_GET['change_password'])){
        if(!isset($_GET['delete_account'])){
            $get_orders="select * from customer_orders where customer_id='$customer_id' AND order_status='pending'";
        $run_orders=mysqli_query($con,$get_orders);
            $count_orders=mysqli_num_rows($run_orders);
            if($count_orders>0){
                echo "<h2>You have $count_orders Pending order</h2>";
            }


        }
        }
        }
                                     }
                                     
    }
}























?>
