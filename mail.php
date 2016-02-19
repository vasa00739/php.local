<?php

$headers .= "From: Служба поодержки Яндекс <support@yandex.ru>\r\n";

$res = mail("a2148@yandex.ru", "Test", "Test", $headers);

if (TRUE == $res)
{
    echo "Писбмо успешно отправлено";
}