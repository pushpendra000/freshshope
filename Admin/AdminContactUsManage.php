<?php
    include("../connection.php");

    if(isset($_REQUEST["did"])){

        $qry="DELETE FROM tbl_contactus where ContactId=".$_REQUEST["did"];
        mysqli_query($con,$qry);
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
                $currentPage= "contact";
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
                                <div>ContactUs Manage
                                    <div class="page-title-subheading">
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
                                <div class="card-body"><h5 class="card-title">Contact List</h5> 
                                    <div class="mb-3">
                                    <table class="mb-0 table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php
                                            $qry="SELECT * FROM tbl_contactus";
                                            $tbl=mysqli_query($con,$qry);

                                            while($row=mysqli_fetch_array($tbl)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row["ContactId"];?></td>
                                            <td><?php echo $row["Name"];?></td>
                                            <td><?php echo $row["Mobile"]; ?></td>
                                            <td><?php echo $row["Email"];?></td>
                                            <td><?php echo $row["Message"];?></td>
                                            <td><a href='AdminContactUsManage.php?did=<?php echo $row["ContactId"];?>' onclick="return confirm('Are you sure?')">Delete</a></td>
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
