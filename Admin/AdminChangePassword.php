<?php
    include("../connection.php");
if(!isset($_SESSION["AdminId"])){
	header("Location:AdminLogin.php");
}
    if(isset($_REQUEST["btn_Submit"])){
        $adminId=$_SESSION["AdminId"];
        $CurrentPassword=$_POST["txt_currentpassword"];
        $NewPassword=$_POST["txt_Password"];
        $NewPassword=$_POST["txt_CPassword"];
    
        $qry="SELECT * FROM tbl_adminlogin where AdminId='$adminId' and Password='$CurrentPassword'";
        $tbl=mysqli_query($con,$qry);
        $row=mysqli_fetch_array($tbl);

        $User_Password=$row["Password"];
        
        if($CurrentPassword==$User_Password){
            if($NewPassword==$NewPassword){
                $qry="UPDATE tbl_adminlogin SET Password='$NewPassword' where AdminId=".$_SESSION["AdminId"];

                $tbl= mysqli_query($con,$qry);
                // $row=mysqli_fetch_array($tbl);
                if($tbl){
                    $msg= "Password has been changed successfully...";
                }
                else{
                    $msg= "Password changing Failed...";
                }
            }
            else{
                $msg= "New Password and Confrim Password must be identical";
            } 
        }
        else{
            $msg= "Current Password is wrong";
        }
    }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Password Manage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php
            include("AdminHeader.php");
        ?>
        <div class="ui-theme-settings">
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                </div>
            </div>
        </div> 
        
        <div class="app-main">
            
        <?php
            include("AdminMenu.php");
        ?>
            <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>Password Manage
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                       
                                    </div>
                                </div> 
                            
                            </div>
                        </div>            


            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Change Password</h5>
                            <form class="" method="post">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Current Password</label>

                                    <input name="txt_currentpassword"  id="exampleCurrent Password" placeholder="Enter Current Password" type="password" class="form-control" required>
                                </div>

                                <div class="position-relative form-group">
                                    <label for="examplePassword" class="">New Password</label>

                                    <input name="txt_Password" id="exampleNewPassword" placeholder="Enter New password" type="password"
                                    class="form-control" required>
                                </div>

                                <div class="position-relative form-group">
                                    <label for="examplePassword" class="">Confrom Password</label>

                                    <input name="txt_CPassword" id="exampleConfirmPassword" placeholder="Enter Confirm password" type="password"
                                    class="form-control" required>
                                </div>

                                <button name="btn_Submit" id="btn_Submit" class="mt-1 btn btn-primary">Save</button>
                                <?php if(isset($msg)) echo "<p style='color: red; 51px; font-weight: bold;'>$msg</p>"; ?>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
    </div>
    <!-- Footer Start -->
    <?php
        include("AdminFooter.php");
    ?> 
    <!-- Footer Start -->
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>