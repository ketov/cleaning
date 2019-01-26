<?php

$name = '';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $name = iconv("utf-8", "windows-1251", "" . $name);
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];    
    $campaign = $_POST['campaign'];
    $term = $_POST['term'];
    if (mb_strlen($phone) <= 1) {
        $phone = false;
        header("Phone:");
    } else {
        $phone = iconv("utf-8", "windows-1251", "" . $phone);        
        $campaign = iconv("utf-8", "windows-1251", "Тип компании:" . $campaign);
        $term = iconv("utf-8", "windows-1251", "Ключевая фраза:" . $term);
    }
}

if ($phone !== false) {
    $message = $name . "<br />" . $phone . "<br />" . $campaign. "<br />" . $term;	
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";

    mail("2087844@bk.ru, AC2087844@gmail.com, ayvazov@i-market.ru, ketov1992@list.ru", iconv("utf-8", "windows-1251", "АКЦИЯ2018.ПослеРемонта.РассчитатьСтоимость"), $message, $headers);

    header("Success: ");
}

header("Content-type: text/html; charset=windows-1251");
?>Данные в заголовках
