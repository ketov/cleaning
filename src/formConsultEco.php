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

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (mb_strlen($email) <= 1) {
        $email = false;
        header("Email:");
    } else {
        $email = iconv("utf-8", "windows-1251", "" . $email);
    }
}

if ($email !== false) {
    //$message = $name . "<br />" . $email . "<br />" . $course;

	$message = $email;
	
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";

    //mail("2087844@bk.ru", iconv("utf-8", "windows-1251", "Генеральная.ПолучитьКонсультацию"), $message, $headers);
    mail("2087844@bk.ru", iconv("utf-8", "windows-1251", "ЭКО.ПолучитьКонсультацию"), $message, $headers);

    header("Success: ");
}

header("Content-type: text/html; charset=windows-1251");
?>Данные в заголовках