 <?php
    include("../connection.php");
    
    if(isset($_REQUEST["btn_Submit"])){

        $id=$_REQUEST["eid"];
        $fn=$_FILES["fu_Photo"] ["name"];
        $sPath=$_FILES["fu_Photo"] ["tmp_name"];
        $Title=$_POST["txt_title"];
        if(strlen($fn)==0)
        {

            $qry="UPDATE tbl_blogcategory SET CategoryName='$Title' WHERE CategoryId=".$id;
            mysqli_query($con,$qry);
        }
        else
        { 
            $ext = pathinfo($fn, PATHINFO_EXTENSION);

			$dpath = "BlogCategory/".$id.".".$ext;
			move_uploaded_file($sPath,"../".$dpath);

			$qry="UPDATE tbl_blogcategory SET CategoryName='$Title' , PhotoUrl='$dpath' WHERE CategoryId=".$id;
			$tbl=mysqli_query($con, $qry);
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
    <title>Blog Category Manage</title>
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
<link href="./main.css" rel="stylesheet"></head>
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
                                <div> Blog Category Menage
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                <a href="AdminBlogCategoryShow.php"><button type="button"class="btn-shadow  btn btn-info">Back</button></a>  
                                </div>
                            </div>
                        </div>
                    </div>            
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Blog Category</h5>   
                                    <div class="mb-3">
                                        <form class="" method="post" enctype="multipart/form-data">
                                            <?php 
                                                $qry="SELECT * FROM tbl_blogcategory WHERE CategoryId=".$_REQUEST["eid"];

                                                $tbl=mysqli_query($con,$qry);
                                                if($row=mysqli_fetch_array($tbl)){
                                            ?>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="txt_title" class="form-control" aria-label="Title" value="<?php echo $row["CategoryName"];?>">
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"></label>
                                                <input class="form-control" type="file" name="fu_Photo" id="fu_Photo">
                                            </div>               
                                            <button name="btn_Submit" class="mt-1 btn btn-primary" onclick="return confirm('Do You Want Change Data')">Submit</button>
                                            <?php
                                                if(isset($msg)){
                                                    echo $msg;
                                                }
                                            }
                                            ?> 
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                                 
                </div>
            </div>
        </div>
    </div>
    <?php
        include("AdminFooter.php");
    ?>      
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>
