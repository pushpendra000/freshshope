<?php 
 include("connection.php");
 
 if(isset($_REQUEST["cid"]))
    {
        $opr=$_REQUEST["opr"];
        if($opr=="plus")
            $qry= "UPDATE tbl_cart SET Qty=Qty+1 WHERE CartId=".$_REQUEST["cid"];
        else
            $qry= "UPDATE tbl_cart SET Qty=Qty-1 WHERE CartId=".$_REQUEST["cid"];
        mysqli_query($con, $qry);
    }

    header("Location:cart.php");

?>