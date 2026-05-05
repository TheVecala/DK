<?php
// send_comment.php

// OPRAVENO: email příjemce – uprav pokud bude nová schránka na dusanovakapela.cz
$recipient = "dusan@mezi3a5.cz";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. OCHRANA PROTI SPAMU (honeypot)
    if (!empty($_POST['robot_check'])) {
        header("Location: index.php?status=bot#kontakt");
        exit;
    }

    // 2. NAČTENÍ A SANITACE DAT
    $name    = strip_tags(trim($_POST["Name"] ?? ''));
    // OPRAVENO: přidán strip_tags i pro zprávu
    $message = strip_tags(trim($_POST["Message"] ?? ''));

    $subject = "Nový vzkaz na webu od: $name";

    // 3. VALIDACE
    if (empty($name) || empty($message)) {
        header("Location: index.php?status=error#kontakt");
        exit;
    }

    // OPRAVENO: omezení délky zprávy na 5000 znaků
    if (mb_strlen($message) > 5000) {
        header("Location: index.php?status=error#kontakt");
        exit;
    }

    // 4. SESTAVENÍ EMAILU
    $email_content  = "Odesílatel: $name\n\n";
    $email_content .= "Zpráva:\n--------------------\n";
    $email_content .= "$message\n";
    $email_content .= "--------------------\n";
    $email_content .= "(Na tento email nelze odpovědět, odesílatel neuvedl kontakt)";

    // OPRAVENO: From: doména změněna na dusanovakapela.cz (SPF záznamy)
    $email_headers  = "From: Web Form <noreply@dusanovakapela.cz>\r\n";
    $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 5. ODESLÁNÍ
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        header("Location: index.php?status=success#kontakt");
    } else {
        header("Location: index.php?status=error#kontakt");
    }

} else {
    header("Location: index.php");
}
?>
