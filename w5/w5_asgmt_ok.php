<html>
<?php
ob_start();
session_start();

if (isset($_SESSION['id'])) {
} else {
    header("Location:w5_asgmt_error.php");
}
$ID = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <h1>Homepage</h1>
    <ul>
        <li><a href="w5_asgmt_president.php">president</a></li>
        <li><a href="w5_asgmt_teacher.php">teacher</a></li>
        <li><a href="w5_asgmt_student.php">student</a></li>
        <li><a href="w5_asgmt_logout.php">Logout</a></li>
    </ul>
</body>

</html>