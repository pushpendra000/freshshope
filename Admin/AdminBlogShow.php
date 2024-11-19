<?php
include("../connection.php");
if(isset($_REQUEST["did"])){
$qry="DELETE FROM tbl_blog where BlogId=".$_REQUEST["did"];
mysqli_query($con,$qry);
}
?> 
<!doctype html>
<html lang="en">

<head>
<!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Admin Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<meta name="description" content="This is an example dashboard created using build-in elements and components.">
<meta name="msapplication-tap-highlight" content="no">

<script type="text/javascript" src="JS/Category.js"></script>
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
<div>Blog Manage
</div>
</div>
<div class="page-title-actions">
<div class="d-inline-block dropdown">
<a href="AdminBlogAdd.php"><button type="button"class="btn-shadow  btn btn-info">Add</button></a>   
</div>
</div>
</div>
</div>            

<div class="row">
<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">Blog List</h5> 
<div class="mb-3">
<form class="" method="post">
<table class="mb-0 table table-bordered table-hover table-striped">
<tr>
<th>Category</th>
<th>
    <select name="ddl_category" id="ddl_category" class="form-control" onchange="submit()">
        <option value="0">Select Category</option>
        <?php
            $qry="SELECT * FROM tbl_blogcategory";
            $tbl=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($tbl)){
        ?>
        <option value="<?php echo $row["CategoryId"];?>"<?php if(isset($_REQUEST["ddl_category"]) && $_REQUEST["ddl_category"]== $row["CategoryId"]) echo 'selected' ?>><?php echo $row["CategoryName"];?></option>
        <?php
            }
        ?>
    </select>
</th>
<!-- <th><button type="button" name="btn_Show" class="btn-shadow  btn btn-info">Show</button></th> -->
<th><input type="submit" name="btn_Show" class="btn-shadow btn btn-info" value="Show"></th>
</tr>
</table>

<table class="mb-0 table table-bordered table-hover table-striped">
<thead>
<tr>
    <th>S.no.</th>
    <th>CategoryId</th>
    <th>Title</th>
    <th>Date</th>
    <th>Shortdescription</th>
    <th>Shortbanner</th>
    <th>Fulldescription</th>
    <th>FullBanner</th>
    <th>Author</th>
    <th></th>
    <th></th>
</tr>
</thead>
<tbody>
<?php
    if(isset($_REQUEST["ddl_category"])){
    $qry="SELECT tbl_blog.*, CategoryName FROM tbl_blog, tbl_blogcategory WHERE  tbl_blog.CategoryId = tbl_blogcategory.CategoryId and tbl_blog.CategoryId=".$_POST["ddl_category"];

   // echo "<br><br><br><br>".$qry;
    $tbl=mysqli_query($con,$qry);
    while($row=mysqli_fetch_array($tbl)){
?>
    <tr>
        <td><?php echo $row["BlogId"];?></td>
        <td><?php echo $row["CategoryName"];?></td>
        <td><?php echo $row["Title"];?></td>
        <td><?php echo $row["BlogDate"];?></td>
        <td><?php echo $row["ShortDescription"];?></td>
        <td><img src="../<?php echo $row["ShortBanner"];?>" Style="width:100px;"></td>
        <td><?php echo $row["FullDescription"];?></td>
        <td><img src="../<?php echo $row["FullBanner"];?>" Style="width:100px;"></td>
        <td><?php echo $row["Author"];?></td>
        <td><a href="AdminBlogEdit.php?eid=<?php echo $row["BlogId"];?>">Edit</a></td>
        <td><a href='AdminBlogShow.php?did=<?php echo $row["BlogId"];?>' onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
<?php
    }
}
?>
</tbody>
</table>
</form>
</div>
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
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>