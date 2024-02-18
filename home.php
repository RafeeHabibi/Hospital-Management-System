<?php 

    require_once("connection.php");

    if(!isset($_SESSION["staff_id"]))
    {
        header("location: login.php?notLogin");
    } 
?> 
<?php require_once("top.php"); ?>

<?php require_once("footer.php"); ?>