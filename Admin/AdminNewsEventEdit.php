<?php
include("../connection.php");

if(isset($_REQUEST["btn_Submit"])){

$id=$_REQUEST["eid"];

$fn=$_FILES["fu_Photo"]["name"];
$sPath=$_FILES["fu_Photo"]["tmp_name"];


$Category=$_POST["ddl_Category"];
$Name=$_POST["txt_name"];
$StartDate=$_POST["txt_SDate"];
$EndDate=$_POST["txt_EDate"];
$StartTime=$_POST["txt_SDate"];
$EndTime=$_POST["txt_EDate"];
$Description=$_POST["txt_description"];

$qry="UPDATE tbl_newsevent SET CategoryId='$Category', NewsEventName='$Name', StartDate='$StartDate', EndDate='$EndDate',StartTime='$StartTime', EndTime='$EndTime', Description='$Description' where NewsEventId=".$id;

mysqli_query($con,$qry);

if(strlen($fn)>0)
{

$ext = pathinfo($fn, PATHINFO_EXTENSION);
$dpath = "NewsEventImage/".$id.".".$ext;

move_uploaded_file($sPath,"../".$dpath);

$qry="UPDATE tbl_newsevent SET Banner='$dpath' WHERE NewsEventId=".$id;

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
<title>News & Event Manage</title>
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
<div>News & Event Manage
</div>
</div>
<div class="page-title-actions">
<div class="d-inline-block dropdown">
<a href="AdminNewsEventShow.php"><button type="button"class="btn-shadow  btn btn-info">Back</button></a>   
</div>
</div>
</div>
</div>            

<div class="row">
<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">Controls Types</h5> 
<div class="mb-3">
<form class="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col mb-3">
        <?php
            $qry="SELECT * FROM tbl_newsevent WHERE NewsEventId=".$_REQUEST["eid"];
            $tbl=mysqli_query($con,$qry);
            if($row=mysqli_fetch_array($tbl)){
        ?>
            <select name="ddl_Category" id="ddl_Category" class="form-control">
                <option value="0">Select Category</option>
                <?php   
                    $qryCat= "SELECT * FROM tbl_newseventcategory";   
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
            <input type="text" name="txt_name" id="txt_name" class="form-control" placeholder="Name" value="<?php echo $row["NewsEventName"];?>"  aria-label="Title">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <input type="date" name="txt_SDate" id="txt_SDate" class="form-control" placeholder="Start Date" value="<?php echo $row["StartDate"];?>"  aria-label="Title">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <input type="date" name="txt_EDate" id="txt_EDate" class="form-control" placeholder=" End Date" value="<?php echo $row["EndDate"];?>" aria-label="Title">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <input type="time" name="txt_STime" id="txt_STime" class="form-control" placeholder=" Start Time" value="<?php echo $row["StartTime"];?>" aria-label="Title">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <input type="time" name="txt_ETime" id="txt_ETime" class="form-control" placeholder=" End Time" value="<?php echo $row["EndTime"];?>" aria-label="Title">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="text" name="txt_description" id="txt_description" class="form-control" placeholder="Description" value="<?php echo $row["Description"];?>" aria-label="Title">
        </div>
    </div>
    
    <div class="mb-3">
        <label for="formFile" class="form-label"></label>
        <input class="form-control" type="file" name="fu_Photo" id="fu_Photo" id="formFile">
    </div>               
    <!-- <button name="btn_Submit" onclick="return validInsert()" class="mt-1 btn btn-primary">Submit</button> -->
    <input type="submit" name="btn_Submit" onclick="return validInsert()" class="mt-1 btn btn-primary" value="Submit" />
    <span style="color:red;">
        <?php
            if(isset($msg)){
                echo $msg;
            }
        }
        ?>
    </span> 
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
