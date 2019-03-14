<?php
      session_start();
    if (isset($_SESSION['adminUsername'])){
       include "connect.php";
       include "includes/header.inc";
       include  "includes/navs.inc";
?>







<?php include "includes/footer.inc"?>

<?php
       }else{
           header('Location:index.php');
           exit();
       }
?>
