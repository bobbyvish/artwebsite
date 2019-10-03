<?php require_once('inc/db.php');?>
<?php require_once('functions/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('inc/top.php');?>


<body>
    <?php require_once('inc/header.php');?>



    <section>
        <div class="container">
            <div class="row">
                <?php require_once('inc/sidebar.php');?>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        
                       <?php 
                        getProduct();
                        getCategoryProduct();
                        getBrandProduct();
                        searchProduct();
                        echo cart();
                        ?>
                        



                    </div>
                </div>
            </div>
    </section>
  
    <?php require_once('inc/footer.php');?>


</body>

</html>
