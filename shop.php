<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Shoe Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
     <?php include("header.php"); ?>


    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">


<?php
    if(isset($_REQUEST["cid"]))
        $qry="SELECT * FROM tbl_product where IsBlocked ='0' and CategoryId=".$_REQUEST["cid"];
    else
        $qry="SELECT * FROM tbl_product";
    
    $tbl= mysqli_query($con, $qry);
    while($row=mysqli_fetch_array($tbl))
    {
?>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <div class="products-single fix">
                <div class="box-img-hover">
                    <div class="type-lb">
                        <p class="sale">Sale</p>
                    </div>
                    <img src='<?php echo $row["PhotoUrl"]; ?>' class="img-fluid" alt="Image">
                    <div class="mask-icon">
                        <ul>
                            <li><a href="shop-detail.php?pid=<?php echo $row["ProductId"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                            <li><a href="AddToWishList.php?pid=<?php echo $row["ProductId"]; ?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                        </ul>
                        <a class="cart" href="AddToCart.php?pid=<?php echo $row["ProductId"]; ?>">Add to Cart</a>
                    </div>
                </div>
                <div class="why-text">
                    <h4><?php echo $row["ProductName"]; ?></h4>
                    <h5>Rs. <?php echo $row["Price"]; ?>/- </h5>
                </div>
            </div>
        </div>

<?php
}
?>

                                       
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">

<?php
if(isset($_REQUEST["cid"]))
    $qry="SELECT * FROM tbl_product where CategoryId=".$_REQUEST["cid"];
else
    $qry="SELECT * FROM tbl_product";
    
    $tbl= mysqli_query($con, $qry);
    while($row=mysqli_fetch_array($tbl))
    {
?>



    <div class="list-view-box">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">New</p>
                        </div>
                        <img src="<?php echo $row["PhotoUrl"]; ?>" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="shop-detail.php?pid=<?php echo $row["ProductId"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="AddToWishList.php?pid=<?php echo $row["ProductId"]; ?>" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                <div class="why-text full-width">
                    <h4><?php echo $row["ProductName"]; ?></h4>
                    <h5> <del><?php echo $row["Price"]; ?></del> <?php echo $row["OfferPrice"]; ?></h5>
                    <p> <?php echo $row["FullDescription"]; ?></p>
                    <a class="btn hvr-hover" href="AddToCart.php?pid=<?php echo $row["ProductId"]; ?>">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
                   



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                               
                                
                                <?php
    $qry="SELECT * FROM tbl_productcategory";
    $tbl= mysqli_query($con, $qry);
    while($row=mysqli_fetch_array($tbl))
    {
?>
                                
    <a href="shop.php?cid=<?php echo $row["CategoryId"]; ?>" class="list-group-item list-group-item-action"> <?php echo $row["CategoryName"] ?> <small class="text-muted"></small></a>

<?php
}
?>




                            </div>
                        </div>
                    <!-- start Price slider -->

                         <!-- <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                    <button class="btn hvr-hover" type="submit">Filter</button>
                                </p>
                            </div> 
                        </div> -->

                    <!-- END Price slider -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    

    <?php include("footer.php"); ?>

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>