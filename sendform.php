<?php

if(isset($_POST['submit'])) {
    $to = "vivisectivecarrot@gmail.com";
    $from = "marcovkir@gmail.com";
    $name = $_POST['clientName'];
    $phone = $_POST['clientPhone'];
    $subject = "Заказ рассчёта проекта";
    $message = $name . " " . " заинтересовван в рассчёте проекта, его телефон: " . $phone;
    $header = "From:" . $from;

    mail($to,$subject,$message,$header);
    echo "Почта отправлена.";
}

?>