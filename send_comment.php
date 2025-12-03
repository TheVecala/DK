<?php
// send_comment.php - Zjednodušená verze (bez emailu odesílatele)

// Nastavení příjemce
$recipient = "dusan@mezi3a5.cz"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. OCHRANA PROTI SPAMU
    if (!empty($_POST['robot_check'])) {
        header("Location: index.php?status=bot#kontakt");
        exit;
    }

    // 2. NAČTENÍ DAT
    // Email a Předmět jsme odstranili, bereme jen Jméno a Zprávu
    $name = strip_tags(trim($_POST["Name"]));
    $message = trim($_POST["Message"]);

    // Pevně daný předmět emailu, který vám přijde do schránky
    $subject = "Nový vzkaz na webu od: $name";

    // 3. VALIDACE
    if (empty($name) || empty($message)) {
        header("Location: index.php?status=error#kontakt");
        exit;
    }

    // 4. SESTAVENÍ EMAILU
    $email_content = "Odesílatel: $name\n\n";
    $email_content .= "Zpráva:\n--------------------\n";
    $email_content .= "$message\n";
    $email_content .= "--------------------\n";
    $email_content .= "(Na tento email nelze odpovědět, odesílatel neuvedl kontakt)";

    // Hlavičky
    // Používáme systémový email, protože neznáme email odesílatele
    $email_headers = "From: Web Form <noreply@mezi3a5.cz>\r\n";
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