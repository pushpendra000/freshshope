    <?php
    include("connection.php");

    if(!isset($_SESSION["CustomerId"]))
        header("Location:Register.php");


    if(isset($_REQUEST["btn_PlaceOrder"])) 
    {
        $CustomerId = $_SESSION["CustomerId"]; 
        $OrderDate= date("d-m-y");
        $TotalAmount = $_POST["hdn_Total"];
        $TAX= 0;
        $Disc= 0;
        $NetAmount= $_POST["hdn_Total"];
        $DA_Name= $_POST["txt_DAName"];
        $DA_Email= $_POST["txt_DAEmail"];
        $DA_Mobile= $_POST["txt_DAMobile"];
        $DA_Address= $_POST["txt_DAAddress"];
        $BA_Name= $_POST["txt_BAName"];
        $BA_Email= $_POST["txt_BAEmail"];
        $BA_Mobile= $_POST["txt_BAMobile"];
        $BA_Address= $_POST["txt_BAAddress"];
        $Status= 0;

        $qry="INSERT INTO tbl_OrderMaster (CustomerId, OrderDate, TotalAmount, TAX, Disc, NetAmount, DA_Name, DA_Email, DA_Mobile, DA_Address,BA_Name, BA_Email, BA_Mobile, BA_Address, Status) VALUES ($CustomerId, '$OrderDate', $TotalAmount, $TAX, $Disc, $NetAmount, '$DA_Name', '$DA_Email', '$DA_Mobile', '$DA_Address','$BA_Name', '$BA_Email', '$BA_Mobile', '$BA_Address', $Status)";
         // echo $qry;
         // exit;

         mysqli_query($con,$qry);


        $qry="SELECT MAX(OMID) OMID FROM tbl_OrderMaster";

        $tbl= mysqli_query($con, $qry);

        if($row=mysqli_fetch_array($tbl))
        {
            $OMId=$row["OMID"];
        }

        $qry="INSERT INTO tbl_orderdetails (OMID, ProductId, Qty, Price) SELECT $OMId, tbl_cart.ProductId, tbl_cart.Qty, tbl_product.Price   FROM tbl_cart, tbl_product where tbl_cart.ProductId = tbl_product.ProductId and CustomerId=".$_SESSION["CustomerId"];

        // echo $qry;

        mysqli_query($con,$qry);


        $qry="DELETE FROM tbl_Cart WHERE CustomerId=".$_SESSION["CustomerId"];

        // echo $qry;

        // exit;

        mysqli_query($con,$qry);

        header("Location:OrderThankYou.php");
    }   
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
        <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
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
    <form method="post">
        <!-- Start All Title Box -->
        <div class="all-title-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Checkout</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End All Title Box -->

        <!-- Start Cart  -->
        <div class="cart-box-main">
            <div class="container">
                <div class="row new-account-login">


                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="checkout-address">
                            <div class="title-left">
                                <h3>Billing address</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">name *</label>
                                    <input type="text" class="form-control" name="txt_BAName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Mobile *</label>
                                    <input type="text" class="form-control" name="txt_BAMobile" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Email *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="txt_BAEmail" placeholder="" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" name="txt_BAAddress" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            
                            <hr class="mb-1">  
                        </div>
                        <div class="checkout-address">
                            <div class="title-left">
                                <h3>Delivery address</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">name *</label>
                                    <input type="text" class="form-control" name="txt_DAName" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Mobile *</label>
                                    <input type="text" class="form-control" name="txt_DAMobile" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Email *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="txt_DAEmail" placeholder="" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" name="txt_DAAddress" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            
                            <hr class="mb-1">  
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">

                            </div>

                            <div class="col-md-12 col-lg-12">
                                <div class="order-box">
                                    <div class="title-left">
                                        <h3>Your order</h3>
                                    </div>
                                    <div class="d-flex">
                                        <div class="font-weight-bold">Product</div>
                                        <div class="ml-auto font-weight-bold">Total</div>
                                    </div>
                                    <hr class="my-1">
                                    <?php 

                                    $qry="SELECT sum(tbl_cart.Qty*Price) as Amount FROM tbl_cart, tbl_product where tbl_cart.ProductId = tbl_product.ProductId and CustomerId=".$_SESSION["CustomerId"];
//echo $qry;
//exit;
                                    $total=0;
                                    $tbl= mysqli_query($con, $qry);
                                    if($row=mysqli_fetch_array($tbl))
                                    {

                                        ?>

                                        <div class="d-flex">
                                            <h4>Sub Total</h4>
                                            <div class="ml-auto font-weight-bold">Rs. <?php echo $row["Amount"]; ?>/- </div>
                                        </div>

                                        <div class="d-flex">
                                            <h4>Shipping Cost</h4>
                                            <div class="ml-auto font-weight-bold"> Free </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex gr-total">
                                            <h5>Grand Total</h5>
                                            <div class="ml-auto h5"> Rs. <?php echo $row["Amount"]; ?>/- 
                                             <input type="hidden"  name="hdn_Total" value="<?php echo $row["Amount"]; ?>">   
                                         </div>
                                     </div>

                                     <?php 

                                 }
                                 ?>


                                 <hr> </div>
                             </div>
                             <div class="col-12 d-flex shopping-box"> 
                                <input type="submit" name="btn_PlaceOrder" class="ml-auto btn hvr-hover" value="Place Order" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Cart -->

    </form> 


    <!-- Start Footer  -->
    <?php include("footer.php"); ?> 
    <!-- End Footer  -->

    
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