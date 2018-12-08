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
    $campaign = $_POST['campaign'];
    $term = $_POST['term'];
    if (mb_strlen($email) <= 1) {
        $email = false;
        header("Email:");
    } else {
        $email = iconv("utf-8", "windows-1251", "Телефон:" . $email);
        $campaign = iconv("utf-8", "windows-1251", "Тип компании:" . $campaign);
        $term = iconv("utf-8", "windows-1251", "Ключевая фраза:" . $term);
    }
}

if ($email !== false) {
    //$message = $name . "<br />" . $email . "<br />" . $course;

	$message = $email . "<br />" . $campaign. "<br />" . $term;
	
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";

    //mail("2087844@bk.ru", iconv("utf-8", "windows-1251", "Генеральная.Шапка"), $message, $headers);
    mail("2087844@bk.ru, brainstormmedia@ya.ru, ketov1992@list.ru", iconv("utf-8", "windows-1251", "Генеральная.Шапка"), $message, $headers);


    header("Success: ");
}

header("Content-type: text/html; charset=windows-1251");
?>Данные в заголовках
