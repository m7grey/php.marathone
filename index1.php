<?php

if (count($_POST) > 0) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $dt = date("Y-m-d H:i:s");

    file_put_contents('apps.txt', "$dt $name $phone\n", FILE_APPEND);

    echo 'Your request accepted, please wait for our call!';
}
?>

<form method="post">
    Name<br>
    <input type="text" name="name" required><br>
    Mobile<br>
    <input type="text" name="phone"><br>
    <input type="submit" value="Send">

</form>

