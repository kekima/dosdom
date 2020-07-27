<?php

if(isset($_POST['submit'])) {
    $to = "vivisectivecarrot@gmail.com";
    $name = $_POST['clientName'];
    $phone = $_POST['clientPhone'];
    $subject = "Заказ рассчёта проекта";
    $message = $clientName . " " . " заинтересовван в рассчёте проекта, его телефон: " . $_POST['clientPhone'];
    $header = "From:" . $name;

    mail($to,$subject,$message,$header);
    echo "Почта отправлена.";
}

?>