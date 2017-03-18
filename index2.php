<?php
//var_dump($_POST);

if (count($_POST) > 0) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $dt = date("Y-m-d H:i:s");

    if (strlen($name) < 2) {
        $msg = 'You should have name longer 2 symbols';
    } elseif (strlen($phone) < 10) {
        $msg = 'Phone number should be 10 digit';
    } elseif (!is_numeric($phone)) {
        $msg = 'please, put only digit into phone field';
    } else {
        mail("123@example.com","My subject","Line 1\nLine 2,\nLine 3");
        file_put_contents('apps.txt', "$dt $name $phone\n", FILE_APPEND);
        $msg = 'Your request accepted, please wait for our call!';
    }
} else {
    $name = '';
    $phone = '';
    $msg = 'Hello, Fill up empty fields and click Send!';
}

?>

<form method="post">
    Name<br>
    <input type="text" name="name" value="" <?$name;?>required><br>
    Mobile<br>
    <input type="text" name="phone" value="" <?$phone;?><br>
    <input type="submit" value="Send">
</form>
<?php
echo $msg;
?>
