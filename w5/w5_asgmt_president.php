<html>
<?php
ob_start();
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: w5_asgmt_error.php');
    exit;
}

if ($_SESSION['id'] != 'president') {
    header('Location: w5_asgmt_ok.php');
    exit;

}
?>

<head>
    <meta charset="utf-8">

</head>

<body>
    only president
    <br><a href='w5_asgmt_ok.php'>homepage</a>
    <br><a href='w5_asgmt_logout.php'>logout</a>


</body>

</html>