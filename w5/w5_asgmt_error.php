<?php ob_start();
?>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>
    What are you doing<br>    <!-- 非法進入 -->
    it will return to login page in 5 secoonds or<br>
    click
    <a href="w5_asgmt_login.php">here</a>
    <?php
    header("Refresh:5;url=w5_asgmt_login.php")
        ?>
</body>

</html>
<?php ob_flush(); ?>