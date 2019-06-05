<?php
ob_start();
session_start();
    // $_SESSION["psn"][] = $_REQUEST["psn"];
    $psn = $_REQUEST["psn"];
    // $_SESSION["psn"][] = $_REQUEST["psn"];
    $_SESSION["pname"][$psn] = $_REQUEST["pname"];
    $_SESSION["price"][$psn] = $_REQUEST["price"];
    $_SESSION["qty"][$psn] = 1;
    // $_SESSION["psn"] = $_REQUEST["psn"];
    // $_SESSION["pname"] = $_REQUEST["pname"];
    // $_SESSION["price"] = $_REQUEST["price"];
    // $_SESSION["qty"] = 1;
header("location:cartShow.php");
?>