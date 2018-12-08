<?php

/*$name = '';
$course = '';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $name = iconv("utf-8", "windows-1251", "" . $name);
}
if (isset($_POST['course'])) {
    $course = $_POST['course'];
    $course = iconv("utf-8", "windows-1251", "" . $course);
}*/
$name = '';
$message = '';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $name = iconv("utf-8", "windows-1251", "" . $name);
}

if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $message = iconv("utf-8", "windows-1251", "" . $message);
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    if (mb_strlen($phone) <= 1) {
        $phone = false;
        header("Phone:");
    } else {
        $phone = iconv("utf-8", "windows-1251", "" . $phone);
    }
}

if ($phone !== false) {
    //$message = $name . "<br />" . $email . "<br />" . $course;

    $message = $name . "<br />" . $phone . "<br />" . $message;
	
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";

    mail("2087844@bk.ru", iconv("utf-8", "windows-1251", "ПослеРемонта.Заявка"), $message, $headers);


    header("Success: ");
}

header("Content-type: text/html; charset=windows-1251");
?>Данные в заголовках
