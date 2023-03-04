<meta charset="utf-8">

<?php


if (isset($_POST['name'])) {

    $name = $_POST["name"];
    $id = $_POST["id"];
    $member = $_POST["member"];

    // $id=$_GET["id"];

    echo 'your name:', $name, '<br/>';
    echo 'your id:', $id, '<br/>';

    echo 'member:', $member, '<br/>';

    if ($member == 'paid') {
        echo '你只要繳50塊<br/>';
    } else {
        echo '你要繳150塊<br/>';
    }

    echo '<br>';

    $food = $_POST['food'];
    echo 'food:' ;
    foreach ($food as $value)
{
    echo $value.' ';
}

echo '<br>';

$comment=$_POST['comment'];
echo 'your comment:<br/>';
echo nl2br(strip_tags($comment));



} else {
    echo "error";
}
?>