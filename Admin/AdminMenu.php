
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="index.php" class="<?php if($currentPage== "home"){echo "mm-active";}?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Home
                    </a>
                </li>

                <li> 
                    <a class="<?php if($currentPage== "contact"){echo "mm-active";}?>" href="AdminContactUsManage.php">ContactUs</a>
                </li>


                <li> 
                    <a href="AdminLocation.php">Location</a>
                </li>

                <li> 
                    <a href="AdminNotificationShow.php">Notification</a>
                </li>

                <li class="app-sidebar__heading">Blog</li>
                <li>
                    <a href="AdminBlogCategoryShow.php">Category</a>
                    <a href="AdminBlogShow.php">Blog</a>
                </li>

                <li class="app-sidebar__heading">News & Event</li>
                <li>
                    <a href="AdminNewsEventCategoryShow.php">Category</a>
                    <a href="AdminNewsEventShow.php">News and Event</a>
                </li>

                <li class="app-sidebar__heading">Shoping</li>
                <li>
                    <a href="AdminProductCategoryShow.php">Category</a>
                    <a href="AdminProductShow.php">Product</a>
                    <a href="AdminOrderMenageShow.php">Order Manage</a>
                    <a href="AdminCustomer.php">Customer</a>
                </li>

                <li class="app-sidebar__heading">Setting</li>
                <li>
                    <a href="AdminChangePassword.php">Change Password</a>
                </li>
                <li>
                    <a href="AdminLogout.php">Log Out</a>
                </li>
            </ul>
        </div> 
    </div>  
</div> 