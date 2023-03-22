<?php
session_start();
if (isset($_POST['id']) && isset($_POST['pwd'])) {
    $ID = $_POST['id'];
    $PWD = $_POST['pwd'];

    if ($ID == 'president' && $PWD == '123456') {
        $_SESSION['id'] = 'president';
        header('Location: w5_asgmt_ok.php');

    } elseif ($ID == 'teacher' && $PWD == '123456') {
        $_SESSION['id'] = 'teacher';
        header('Location: w5_asgmt_ok.php');

    } elseif ($ID == 'student' && $PWD == '123456') {
        $_SESSION['id'] = 'student';
        header('Location: w5_asgmt_ok.php');

    } else {
        $_SESSION["login"] = "No";
        header("Location:w5_asgmt_fail.php");
    }
}
?>