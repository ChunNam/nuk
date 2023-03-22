<?php
ob_start();
session_start();

if ($_SESSION["login"]=='No') {
} else {
    header("Location:w5_asgmt_error.php");
}
?>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>
    failure!<br>
    it will return to login page in 5 secoonds or<br>
    click
    <a href="w5_asgmt_login.php">here</a>
    <?php
    header("Refresh:5;url=w5_asgmt_login.php")
        ?>
</body>

</html>
<?php ob_flush(); ?>