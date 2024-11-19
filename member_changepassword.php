<?php
    include("connection.php");

    if(isset($_POST["btn_Submit"]))
    {
        $CurrentPassword=$_POST["txt_CurrentPassword"];
        $NewPassword=$_POST["txt_NewPassword"];

        $qry="SELECT * FROM tbl_customer where Password='$CurrentPassword' and CustomerId=".$_SESSION["CustomerId"] ;

        //mysqli_query function is used to execute the sql query
        $tbl= mysqli_query($con, $qry);

        if($row=mysqli_fetch_array($tbl))
        {
            
         $qry= "UPDATE tbl_customer SET Password='$NewPassword' WHERE CustomerId=".$_SESSION["CustomerId"];

        mysqli_query($con, $qry);

        $msg="Change Password Successfully";
        }
        else
        {        
            $msg="Invalid Password";
        }
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
    <title>Change Password</title>
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

    <?php include("member_header.php"); ?>


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
                    <h2>Changepassword</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Change Your Password</h2>
                        <form  method="post">
                            <div class="row">

                               
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="txt_CurrentPassword" placeholder="Current Password" required data-error="Please enter your Current Password">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control"   
                        name="txt_NewPassword" placeholder="New Password" required data-error="Please enter your New Password">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control"   
                        name="txt_ConfirmPassword" placeholder="Confirm Password" required data-error="Please enter your Confirm Password">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                               
 

                    <div class="submit-button text-center">
                        <button class="btn hvr-hover" name="btn_Submit" type="submit">Change Password</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                                    <?php if(isset($msg)) echo "<p style='color: red; padding: 9px 51px; font-weight: bold;'>$msg</p>"; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-6 col-sm-12">
                    <div class="contact-form-right">
                        <h2></h2>
                         
                         
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- End Cart -->

    


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