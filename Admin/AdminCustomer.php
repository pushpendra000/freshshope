<?php
    include("../connection.php");

    if(isset($_REQUEST["bid"]))
    {
        $Bid=$_REQUEST["bid"];
        if($_REQUEST["status"]==1)
            $Status=0;
        else
            $Status=1;



        $qry="UPDATE tbl_customer SET Status='$Status' where CustomerId=$Bid";
        mysqli_query($con, $qry);

    }
?> 
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
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
                                <div>Customer Manage
                                    <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <div class="d-inline-block dropdown">
                                    <a href="AdminHome.php"><button type="button"class="btn-shadow  btn btn-info">Home</button></a>   
                                </div>
                            </div>
                        </div>
                    </div>            

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Customer List</h5> 
                                    <div class="mb-3">
                                    <table class="mb-0 table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $qry="SELECT * FROM tbl_customer";
                                            $tbl=mysqli_query($con,$qry);
                                            while($row=mysqli_fetch_array($tbl)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row["CustomerId"];?></td>
                                            <td><?php echo $row["CustomerName"];?></td>
                                            <td><?php echo $row["Mobile"];?></td>
                                            <td><?php echo $row["Email"];?></td>
                                            <td><?php echo $row["Password"];?></td>
                                            <td> 
                                                <a href='AdminCustomer.php?bid=<?php echo $row["CustomerId"]; ?>&status=<?php echo $row["Status"]; ?>'>                                                
                                                    <?php if($row["Status"]=='1') echo 'Block'; else echo 'Unblock';   ?>   
                                                </a>
                                            </td> 
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
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
