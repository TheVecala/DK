<?php
// send_comment.php

// OPRAVENO: email příjemce – uprav pokud bude nová schránka na dusanovakapela.cz
$recipient = "dusan@mezi3a5.cz";

function redirectWithStatus($status)
{
    header("Location: /?status={$status}#kontakt", true, 303);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. OCHRANA PROTI SPAMU (honeypot)
    if (!empty($_POST['robot_check'])) {
        redirectWithStatus('bot');
    }

    // 2. NAČTENÍ A SANITACE DAT
    $rawName = $_POST["Name"] ?? '';
    $rawMessage = $_POST["Message"] ?? '';
    if (!is_string($rawName) || !is_string($rawMessage)) {
        redirectWithStatus('error');
    }

    $name = strip_tags(trim($rawName));
    $message = strip_tags(trim($rawMessage));

    // Řídicí znaky nemají být v předmětu ani v těle e-mailu.
    $name = preg_replace('/[\x00-\x1F\x7F]+/u', ' ', $name) ?? '';
    $message = preg_replace('/\r\n?|\n/u', "\n", $message) ?? '';

    $subject = "Nový vzkaz na webu od: $name";

    // 3. VALIDACE
    if (empty($name) || empty($message)) {
        redirectWithStatus('error');
    }

    // OPRAVENO: omezení délky zprávy na 5000 znaků
    if (mb_strlen($name) > 120 || mb_strlen($message) > 5000) {
        redirectWithStatus('error');
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
    redirectWithStatus(mail($recipient, $subject, $email_content, $email_headers) ? 'success' : 'error');

} else {
    header("Location: /", true, 303);
}
