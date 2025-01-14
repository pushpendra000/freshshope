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
    <title>Home</title>
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
  <?php include("header.php") ?>

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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop-detail.php">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop-detail.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop-detail.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <!-- <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_02.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_03.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
					<a href="shop-detail.php"><img class="img-fluid"  src="images/add-img-01.jpg" alt="" /></a>	
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<a href="shop-detail.php"><img class="img-fluid" src="images/add-img-02.jpg" alt="" /></a> 
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Fruits & Vegetables</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
<?php

    $qry="SELECT * FROM tbl_product order by ProductId desc limit 12";

    $tbl= mysqli_query($con, $qry);
    while($row=mysqli_fetch_array($tbl))
    {
?>


                <div class="col-lg-3 col-md-6 special-grid">
                    <div class="products-single fix">
                <div class="box-img-hover">
                    <div class="type-lb">
                        <p class="sale">Sale</p>
                    </div>
                    <img src='<?php echo $row["PhotoUrl"]; ?>' class="img-fluid" alt="Image">
                    <div class="mask-icon">
                        <ul>
                            <li><a href="shop-detail.php?pid=<?php echo $row["ProductId"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                            <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> -->
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
    </div>
    <!-- End Products  -->
    <!-- Hot Deals  -->
    <div class="title-all text-center mt-5" >
        <h1>Hot Deals</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
    </div>
    <div class="instagram-box">
        
        <div class="main-instagram owl-carousel owl-theme">
            <?php
                $qry="SELECT * FROM tbl_product order by ProductId";
                $tbl= mysqli_query($con, $qry);
                while($row=mysqli_fetch_array($tbl))
            {
            ?>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo $row["PhotoUrl"]; ?>" alt="" />
                    <div class="hov-in">
                        <a href="shop-detail.php?pid=<?php echo $row["ProductId"]; ?>"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- End Instagram Feed  -->
    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
    <?php
    
        $qry="SELECT * FROM tbl_blog order by blogId desc limit 3";
    
        $tbl= mysqli_query($con, $qry);
        while($row=mysqli_fetch_array($tbl))
        {
    ?>

                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src='<?php echo $row["ShortBanner"] ?>' alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3><?php echo $row["Title"] ?></h3>
                                <p><?php echo $row["ShortDescription"] ?></p>
                            </div>
                            <ul class="option-blog">
                                
                                <li><a href='blog-detail.php?bid=<?php echo $row["BlogId"];?>' ><i class="fas fa-eye"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                
<?php
    }
?>

            </div>
        </div>
    </div>
    <!-- End Blog  -->


    

    <?php include("footer.php") ?>
   

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
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>