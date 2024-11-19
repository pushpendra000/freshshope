<?php
include("../connection.php");

if(isset($_REQUEST["btn_Submit"])){

    $id=$_REQUEST["eid"];

    $fn=$_FILES["fu_Photo"]["name"];
    $sPath=$_FILES["fu_Photo"]["tmp_name"];

    $fn2=$_FILES["fu_Photo2"]["name"];
    $sPath2=$_FILES["fu_Photo2"]["tmp_name"];

    $Category=$_POST["Pro_Category"];
    $Title=$_POST["txt_title"];
    $Date=$_POST["txt_date"];
    $Shortdescription=$_POST["txt_shortdescription"];
    $FullDescription=$_POST["txt_fulldescription"];
    $Author=$_POST["txt_author"];



    $qry="UPDATE tbl_blog SET CategoryId='$Category', Title='$Title', BlogDate='$Date', ShortDescription='$Shortdescription', FullDescription='$FullDescription', Author='$Author' where BlogId=".$id;
    mysqli_query($con,$qry);


    if(strlen($fn) > 0) 
    {
        $ext = pathinfo($fn, PATHINFO_EXTENSION);
        $dpath = "ProductImage/Short-".$id.".".$ext;

        move_uploaded_file($sPath,"../".$dpath);

        $qry="UPDATE tbl_blog SET  ShortBanner='$dpath' WHERE BlogId=".$id;
        mysqli_query($con, $qry);

    }

    if(strlen($fn2) > 0) 
    {
        $ext = pathinfo($fn2, PATHINFO_EXTENSION);
        $dpath2 = "ProductImage/Big-".$id.".".$ext;

        move_uploaded_file($sPath2,"../".$dpath2);

        $qry="UPDATE tbl_blog SET FullBanner='$dpath2' WHERE BlogId=".$id;
        mysqli_query($con, $qry);

    }
}
?>
<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Blog Manage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
<!--
=========================================================
* ArchitectUI HTML Theme Dashboard - v1.0.0
=========================================================
* Product Page: https://dashboardpack.com
* Copyright 2019 DashboardPack (https://dashboardpack.com)
* Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<script type="text/javascript" src="JS/Category.js"></script>

<link href="./main.css" rel="stylesheet">

</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Header Start -->
        <?php
        include("AdminHeader.php");
        ?>
        <!-- Header End  -->
        <div class="ui-theme-settings">
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                </div>
            </div>
        </div>     

        <div class="app-main">
            <!-- Menu Start -->
            <?php
            include("AdminMenu.php");
            ?>
            <!-- Menu End -->

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                    </i>
                                </div>
                                <div>Blog Manage
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                    <a href="AdminBlogShow.php"><button type="button"class="btn-shadow  btn btn-info">Back</button></a>   
                                </div>
                            </div>
                        </div>
                    </div>            

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Product Edit</h5> 
                                    <div class="mb-3">
                                        <form class="" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col mb-3">
                                                   <?php
                                                   $qry="SELECT * FROM tbl_blog WHERE BlogId=".$_REQUEST["eid"];
                                                   $tbl=mysqli_query($con,$qry);
                                                   if($row=mysqli_fetch_array($tbl)){
                                                    ?>


                                                    <select name="Pro_Category" id="Pro_Category" class="form-control" >
                                                        <option value="0">Select Category</option>
                                                        <?php   
                                                        $qryCat= "SELECT * FROM tbl_blogcategory";   
                                                        $tblCat=mysqli_query($con,$qryCat);
                                                        while ($rowCat=mysqli_fetch_array($tblCat)) {
                                                            ?>
                                                            <option value="<?php echo $rowCat["CategoryId"];?>"<?php if($rowCat["CategoryId"]==$row["CategoryId"]) echo 'selected' ?>><?php echo $rowCat["CategoryName"];?></option>
                                                            <?php  
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col mb-3">
                                                    <input type="text" name="txt_title" id="txt_title" class="form-control" placeholder="Title
                                                    " value="<?php  echo $row["Title"];?>" aria-label="Title">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col mb-3">
                                                    <input type="date" name="txt_date" id="txt_date" class="form-control" placeholder="Date" value="<?php  echo $row["BlogId"];?>" aria-label="Title">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <input type="text" name="txt_shortdescription" id="txt_shortdescription" class="form-control" placeholder="Shortdescription" value="<?php  echo $row["ShortDescription"];?>" aria-label="Title">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3" >
                                                    <input type="text" name="txt_fulldescription" id="txt_fulldescription" class="form-control" placeholder="FullDescription" value="<?php  echo $row["FullDescription"];?>" aria-label="Title">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3" >
                                                    <input type="text" name="txt_author" id="txt_author" class="form-control" placeholder="Author" value="<?php  echo $row["Author"];?>" aria-label="Title">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"></label>
                                                <input class="form-control" type="file" name="fu_Photo" id="fu_Photo" id="formFile">
                                            </div> 

                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"></label>
                                                <input class="form-control" type="file" name="fu_Photo2" id="fu_Photo2" id="formFile">
                                            </div>
                                            <!-- <button name="btn_Submit" onclick="return validInsert()" class="mt-1 btn btn-primary">Submit</button> -->
                                            <input type="submit" name="btn_Submit" onclick="return confirm('Do You Want Change Data')" class="mt-1 btn btn-primary" value="Submit" />
                                            <span style="color:red;">
                                                <?php
                                                if(isset($msg)){
                                                    echo $msg;
                                                }
                                                ?>
                                            </span>
                                            <?php
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <?php
                include("AdminFooter.php");
                ?>               
            </div>
        </div>
    </div>
</div>    
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>
