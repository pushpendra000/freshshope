    <!-- Start Main Top -->
   <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            
                            <li><a href="location.php"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="contact-us.php"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box">
                        <div class="our-link">
                        <ul>
                            <?php
                            if(!isset($_SESSION["CustomerId"]))
                            { 
                            ?>
                            <li><a href="Register.php">Login / Register</a></li>
                            <?php
                            }
                            else
                            {
                            ?>
                              <li><a href="member_home.php">My Account</a></li>
                              <li><a href="member_logout.php">Logout</a></li>

                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    </div>



                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
<?php

    $qry="SELECT * FROM tbl_notification order by Id desc limit 10";

    $tbl= mysqli_query($con, $qry);
    while($row=mysqli_fetch_array($tbl))
    {
?>



                                <li>
                                    <i class="fab fa-opencart"></i> <?php echo $row["Title"] ?>
                                </li>
                                
    <?php
        }
    ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



   
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="shop.php">Products</a></li>
                         <li class="nav-item"><a class="nav-link" href="cart.php">View Cart</a></li>

                       

                        <!-- <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.php">Sidebar Shop</a></li>
                                <li><a href="shop-detail.php">Shop Detail</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                            </ul>
                        </li> -->


                       <!--  <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
                        <li class="">
                            <a href="member_WishList.php">
                                <i class="fa fa-heart"></i>
                                <span>
                                    <sup>

                                    <?php
                                    if(isset($_SESSION["CustomerId"]))

                                    {
                                        $qry="SELECT * FROM tbl_wishlist where CustomerId=".$_SESSION["CustomerId"] ;
                                        $tbl=mysqli_query($con,$qry);
                                        $num=mysqli_num_rows($tbl);
                                        echo $num;
                                    }
                                    ?>

                                    </sup>
                                </span>
                            </a>
                        </li>
                        <li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span>
                                    <sup>

                                    <?php
                                    if(isset($_SESSION["CustomerId"]))


                                    {
                                        $qry="SELECT * FROM tbl_cart where CustomerId=".$_SESSION["CustomerId"] ;
                                        $tbl=mysqli_query($con,$qry);
                                        $num=mysqli_num_rows($tbl);
                                        echo $num;
                                    }
                                    ?>

                                    </sup>
                                </span>
                                <span class="badge"></span>
                                <p>My Cart</p>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        
                             
<?php
    if(isset($_SESSION["CustomerId"]))
    {
        $qry="SELECT CartId, tbl_product.*, tbl_cart.Qty,tbl_cart.Qty*Price as Amount   FROM tbl_cart, tbl_product where tbl_cart.ProductId = tbl_product.ProductId and CustomerId=".$_SESSION["CustomerId"];
    
        $total=0;
        $tbl= mysqli_query($con, $qry);
        while($row=mysqli_fetch_array($tbl))
        {
              $total=$total+$row["Amount"];  

?>
                        <li>
                            <a href="#" class="photo"><img src="<?php echo $row["PhotoUrl"] ?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="#"><?php echo $row["ProductName"] ?> </a></h6>
                            <p><?php echo $row["Qty"] ?> x - <span class="price">Rs. <?php echo $row["Price"] ?>/-</span></p>
                        </li>

<?php 
    }
 ?>
                       
                        <li class="total">
                            <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: Rs. <?php echo $total; ?>/-</span>
                        </li>
                        <?php 
    }
 
?>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    