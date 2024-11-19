<?php
include("../connection.php");
        
        if(isset($_REQUEST["btn_Change"])){
            $st=$_REQUEST["ddl_status"];
            $omid=$_REQUEST["hdn_OMID"];
            
        $qry="UPDATE tbl_ordermaster SET Status=$st where OMId=$omid";
        mysqli_query($con, $qry);

        header("Location:AdminOrderMenageShow.php");
    }
?> 
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Product Manage</title>
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
<div>Product Manage
</div>
</div>
<div class="page-title-actions">
<div class="d-inline-block dropdown">
<a href="AdminOrderMenageShow.php"><button type="button"class="btn-shadow  btn btn-info">Back</button></a>   
</div>
</div>
</div>
</div>            

<div class="row">
<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">Order List</h5>
<form method="post">
<table class="mb-0 table table-bordered table-hover table-striped col-md-6">
    <tr>
       <th>Status Update</th>
       <td>
            <select name="ddl_status" id="ddl_status" class="form-control" >
                <option value="0">Select Status</option>

                <option value="1">Pending</option>
                <option value="2">Canceled</option>
                <option value="3">Complete</option>
                
            </select>
            
        </td>
    
         <td><input type="Submit" name="btn_Change" class="btn-shadow  btn btn-info" value="Update"></td>

    </tr>
</table>
 
<div class="mb-3">
<table class="mb-0 table table-bordered table-hover table-striped">
<?php
    if(isset($_REQUEST["vid"])){
    $qry="SELECT * FROM tbl_customer,tbl_ordermaster  where tbl_customer.CustomerId = tbl_ordermaster.CustomerId and OMID=".$_REQUEST["vid"];

   // echo "<br><br><br><br>".$qry;
    $tbl=mysqli_query($con,$qry);
    while($row=mysqli_fetch_array($tbl)){
?>

    <tr>
        <th>OrderId</th>
        <td><input type="hidden" name="hdn_OMID" value="<?php echo $row["OMID"];?>"><?php echo $row["OMID"];?></td>
        <th>CustomerName</th>
        <td><?php echo $row["CustomerName"];?></td>
        <th>Order Date</th>
        <td><?php echo $row["OrderDate"];?></td>  
    </tr>

    <tr> 
        <th>Total Amount</th>
        <td><?php echo $row["TotalAmount"];?></td>
        <th>Tax</th>
        <td><?php echo $row["TAX"];?></td>
        <th>Discount</th>
        <td><?php echo $row["Disc"];?></td>
    </tr>

    <tr>  
        <th>Net Amount</th>
        <td><?php echo $row["NetAmount"];?></td>
        <th>DA_Name</th>
        <td><?php echo $row["DA_Name"];?></td>
        <th>DA_Email</th>
        <td><?php echo $row["DA_Email"];?></td>
        
    </tr>

    <tr>
        <th>DA_Mobile</th>
        <td><?php echo $row["DA_Mobile"];?></td>
        <th>DA_Address</th>
        <td><?php echo $row["DA_Address"];?></td>
        <th>BA_Name</th>
        <td><?php echo $row["BA_Name"];?></td>
    </tr>


    <tr>
        <th>BA_Email</th>
        <td><?php echo $row["BA_Email"];?></td>
        <th>BA_Mobile</th>
        <td><?php echo $row["BA_Mobile"];?></td>
        <th>BA_Address</th> 
        <td><?php echo $row["BA_Address"];?></td>
    </tr>

<?php
    }
}
?>
</table>
</form>
</div>
</div>
</div> 
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">Product List</h5> 
<div class="mb-3">
<form class="" method="post">
<table class="mb-0 table table-bordered table-hover table-striped">
<thead>
<tr>
    <th>S.no.</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
</tr>
</thead>
<tbody>
<?php
    if(isset($_REQUEST["vid"])){
    $qry="SELECT * FROM tbl_orderdetails,tbl_product WHERE tbl_orderdetails.ProductId = tbl_product.ProductId and  OMID=".$_REQUEST["vid"];
    $tbl=mysqli_query($con,$qry);
    while($row=mysqli_fetch_array($tbl)){
?>
    <tr>
        <td><?php echo $row["ODId"];?></td>
        <td><?php echo $row["ProductName"];?></td>
        <td><?php echo $row["Price"];?></td>
        <td><?php echo $row["Qty"];?></td>
    </tr>
<?php
    }
}
?>
</tbody>
</table>
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
