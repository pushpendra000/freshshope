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
                            <li><a href="member_home.php"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                        </ul>

                        <a class="" href="member_logout.php">Logout</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="our-link">
                        <ul>
                            <li><a href="member_logout.php">Logout</a></li>
                        </ul>
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
                    <li class="nav-item"><a class="nav-link" href="member_home.php">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="member_changepassword.php">Change Password</a></li>

                    <li class="nav-item"><a class="nav-link" href="member_editprofile.php">Edit Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">View Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="member_WishList.php">Wish List</a></li>
                    <li class="nav-item"><a class="nav-link" href="member_MyOrders.php">My Orders</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="member_logout.php">Logout</a></li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->

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
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#"><?php echo $row["ProductName"] ?> </a></h6>
                            <p><?php echo $row["Qty"] ?> x - <span class="price">Rs. <?php echo $row["Price"] ?>/-</span></p>
                        </li>

                        <?php 
                    }
                    ?>

                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
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
