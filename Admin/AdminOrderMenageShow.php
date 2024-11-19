<?php
include("../connection.php");

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
<div>Order Manage
</div>
</div>
<div class="page-title-actions">
<div class="d-inline-block dropdown">
<a href="AdminProductShow.php"><button type="button"class="btn-shadow  btn btn-info">Product</button></a>   
</div>
</div>
</div>
</div>            

<div class="row">
<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">Order List</h5> 
<div class="mb-3">
<form class="" method="post">
<table class="mb-0 table table-bordered table-hover table-striped">
<tr>
<th>
    <select name="ddl_status" id="ddl_status" class="form-control" onchange="submit()">
        <option value="0">Select Status</option>
      
        <option value="1"<?php if(isset($_REQUEST["ddl_status"]) && $_REQUEST["ddl_status"] == 1) echo 'selected' ?>>Pending</option>
        <option value="2"<?php if(isset($_REQUEST["ddl_status"]) && $_REQUEST["ddl_status"] == 2) echo 'selected' ?>>Canceled</option>
        <option value="3"<?php if(isset($_REQUEST["ddl_status"]) && $_REQUEST["ddl_status"] == 3) echo 'selected' ?>>Complete</option>
       
    </select>
</th>
<th>Start Date</th>
<th>    
<div class="row">  
        <div class="col">
            <input type="date" name="txt_SearchStartDate" id="txt_SearchStartDate" class="form-control" placeholder="Start Date" aria-label="Start Date">
        </div>
    </div>
</th>
<th>End Date</th>
<th> 
<div class="row">  
        <div class="col">
            <input type="date" name="txt_SearchEndDate" id="txt_Edate" class="form-control" placeholder="End Date" aria-label="Start Date">
        </div>
    </div>
</th>
<th><input type="submit" name="btn_Show" class="btn-shadow btn btn-info" value="Show"></th>

</tr>
</table>

<table class="mb-0 table table-bordered table-hover table-striped">
<thead>
<tr>
    <th>S.no.</th>
    <th>CustomerName</th>
    <th>CustomerId</th>
    <th>Total Amount</th>
    <th>Tax</th>
    <th>Discount</th>
    <th>Net Amount</th>
    <th></th>
</tr>
</thead>
<tbody>
<?php
if(isset($_REQUEST["btn_Show"]))
{ 

    if(isset($_REQUEST["txt_SearchStartDate"]))
    {   $date1 = new DateTime($_REQUEST["txt_SearchStartDate"]);
        $dt1=$date1->format('Y-m-d');
    }
    else
        $dt1="";

    if(isset($_REQUEST["txt_SearchEndDate"]))
    {
        $date2 = new DateTime($_REQUEST["txt_SearchEndDate"]);
        $dt2=$date2->format('Y-m-d');
    }  
    else
        $dt2="";

     


     $qry="SELECT tbl_ordermaster.*, CustomerName FROM tbl_customer,tbl_ordermaster ";
           $qry= $qry . " where tbl_customer.CustomerId = tbl_ordermaster.CustomerId ";

    if(isset($_REQUEST["ddl_status"])){
           $qry= $qry . " and tbl_ordermaster.Status=".$_POST["ddl_status"];

    if(isset($_REQUEST["txt_SearchStartDate"]))
        $qry=$qry." and date(DATE_FORMAT(OrderDate, '%Y-%c-%e'))  >= date('$dt1') ";
    
    if(isset($_REQUEST["txt_SearchEndDate"]))
        $qry=$qry." and date(DATE_FORMAT(OrderDate, '%Y-%c-%e'))  <= date('$dt2') ";

        
    // echo $qry; 

       
       $tbl=mysqli_query($con,$qry);
       while($row=mysqli_fetch_array($tbl)){
?>
    <tr>
        <td><?php echo $row["OMID"];?></td>
        <td><?php echo $row["CustomerName"];?></td>
        <td><?php echo $row["CustomerId"];?></td>
        <td><?php echo $row["TotalAmount"];?></td>
        <td><?php echo $row["TAX"];?></td>
        <td><?php echo $row["Disc"];?></td>
        <td><?php echo $row["NetAmount"];?></td>
        <td><a href="AdminOrderView.php?vid=<?php echo $row["OMID"];?>">View</a></td>
    </tr>
<?php
       }
} }
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
