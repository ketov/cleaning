<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $discount = $_POST['discount'];
    $form = $_POST['form'];
    $campaign = $_POST['campaign'];
    $term = $_POST['term'];
    if (mb_strlen($email) <= 1) {
        $email = false;
        header("Email:");
    } else {
        $email = iconv("utf-8", "windows-1251", "Телефон:" . $email);
        $discount = iconv("utf-8", "windows-1251", "Скидка:" . $discount);
        $form = iconv("utf-8", "windows-1251", $form);
        $campaign = iconv("utf-8", "windows-1251", "Тип компании:" . $campaign);
        $term = iconv("utf-8", "windows-1251", "Ключевая фраза:" . $term);
    }
}

if ($email !== false) {
    $message = $email . "<br />" . $discount . "<br />" . $campaign. "<br />" . $term;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";

    mail("2087844@bk.ru, AC2087844@gmail.com, ayvazov@i-market.ru, ketov1992@list.ru", $form, $message, $headers);
    header("Success: ");
}

header("Content-type: text/html; charset=windows-1251");
?>Данные в заголовках
