<?php

if(isset($_POST['submit'])) {
    $to = "vivisectivecarrot@gmail.com";
    $from = "";
    $name = $_POST['clientName'];
    $phone = $_POST['clientPhone'];
    $subject = "Заказ рассчёта проекта";
    $message = $name . " " . " заинтересовван в рассчёте проекта, его телефон: " . $phone;
    $headers[] = 'From: Заказ рассчёта проекта <marcovkir@gmail.com>';
    //$header = "From:" . $from;

    mail($to,$subject,$message, implode("\r\n", $headers));
    echo "Почта отправлена.";
}

?>