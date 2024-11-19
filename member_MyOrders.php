<?php
    include("connection.php");

    if(!isset($_SESSION["CustomerId"]))
        header("Location:Register.php");
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
    <title>My Order</title>
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
                    <h2>MY ORDERS</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

<form method="post">
    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order Od</th>
                                    <th>Order Date</th>
                                    <th>Amount</th>
                                    <th>TAX</th>
                                    <th>Disc</th>
                                    <th>Net</th>
                                    <th>Status</th>
                                    <th>View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                
<?php
    if(isset($_SESSION["CustomerId"]))
    {
        $qry="SELECT * FROM tbl_OrderMaster where CustomerId=".$_SESSION["CustomerId"];
    
        $total=0;
        $tbl= mysqli_query($con, $qry);
        while($row=mysqli_fetch_array($tbl))
        {
                

?>


                               
                                    <td class="name-pr">
                                        <a href="#">
									<?php echo $row["OMID"] ?>
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $row["OrderDate"] ?></p>
                                    </td>
                                     
                                    <td class="total-pr">
                                        <p>Rs. <?php echo $row["TotalAmount"] ?>/-</p>

                                       
                                    </td>
                                     <td class="total-pr">
                                        <p>Rs. <?php echo $row["TAX"] ?>/-</p>

                                       
                                    </td>
                                     <td class="total-pr">
                                        <p>Rs. <?php echo $row["Disc"] ?>/-</p>

                                       
                                    </td>
                                     <td class="total-pr">
                                        <p>Rs. <?php echo $row["NetAmount"] ?>/-</p>

                                       
                                    </td>
                                     <td class="total-pr">
                                        <p><?php echo $row["Status"] ?></p>

                                       
                                    </td>
                                    <td class="remove-pr">
                                        <a href="member_OrderDetails.php?id=<?php echo $row["OMID"]; ?>">
									       View
								        </a>
                                    </td>
                                </tr>

<?php 
    }
}
?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        

          

        </div>
    </div>
    <!-- End Cart -->

   </form>

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
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>