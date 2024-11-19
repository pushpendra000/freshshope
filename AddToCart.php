<?php
    include("connection.php");

    if(!isset($_SESSION["CustomerId"]))
        header("Location:Register.php");
    else
    {
        if(isset($_REQUEST["pid"]))
        {
            $ProductId=$_REQUEST["pid"];
            $CustomerId=$_SESSION["CustomerId"];
            // $qty=$_SESSION["quantity"];


            $qry="SELECT * FROM tbl_cart where CustomerId=$CustomerId and ProductId=$ProductId" ;

            //mysqli_query function is used to execute the sql query
            $tbl= mysqli_query($con, $qry);

            if($row=mysqli_fetch_array($tbl))
            {
                //$msg="Email id is already registered";
            }
            else
            {

                $qry="INSERT INTO tbl_cart (ProductId, CustomerId, Qty) VALUES ($ProductId, $CustomerId, 1)";

                mysqli_query($con, $qry);
            }
            header("Location:shop.php");

        }


        if(isset($_REQUEST["bbid"]))
        {
            $ProductId=$_REQUEST["bbid"];
            $CustomerId=$_SESSION["CustomerId"];

            $qry="SELECT * FROM tbl_cart where CustomerId=$CustomerId and blogid=$ProductId" ;

            //mysqli_query function is used to execute the sql query
            $tbl= mysqli_query($con, $qry);

            if($row=mysqli_fetch_array($tbl))
            {
                //$msg="Email id is already registered";
            }
            else
            {

                $qry="INSERT INTO tbl_cart (blogid, CustomerId, Qty) VALUES ($ProductId, $CustomerId, 1)";

                mysqli_query($con, $qry);
            }
            header("Location:shop.php");
        }   
    }
?>
