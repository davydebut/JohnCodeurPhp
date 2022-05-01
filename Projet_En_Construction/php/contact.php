<?php

$firstname = $name = $email = $phone = $message = "";
$firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
$isSucces = false;
$emailTo = "spanudavy@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = verifyInput($_POST['firstname']);
    $name = verifyInput($_POST['name']);
    $email = verifyInput($_POST['email']);
    $phone = verifyInput($_POST['phone']);
    $message = verifyInput($_POST['message']);
    $isSucces = true;
    $emailText = "";

    if (empty($firstname)) {
        $firstnameError = "Je veux connaitre ton prenom !";
        $isSucces = false;
    } else {
        $emailText .= "Firstname: $firstname\n";
    }
    if (empty($name)) {
        $nameError = "Et oui je veux tout savoir. Même ton nom !";
        $isSucces = false;
    } else {
        $emailText .= "Name: $name\n";
    }

    if (!isEmail($email)) {
        $emailError = "T'essaies de me rouler ? C'est pas un email ça !";
        $isSucces = false;
    } else {
        $emailText .= "Email: $email\n";
    }
    if (!isPhone($phone)) {
        $phoneError = "Que des chiffres et des espaces, stp...";
        $isSucces = false;
    } else {
        $emailText .= "Phone: $phone\n";
    }
    if (empty($message)) {
        $messageError = "Qu'est-ce que tu veux me dire ?";
        $isSucces = false;
    } else {
        $emailText .= "Message: $message\n";
    }
    if ($isSucces) {
        // Envoie de l'email
        $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
        $firstname = $name = $email = $phone = $message = "";
    }
}

function isPhone($var)
{
    return preg_match("/^[0-9 ]*$/", $var);
}

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($var)
{
    // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne trim()
    $var = trim($var);

    $var = stripslashes($var); // Supprime les antislashs

    // Convertit les caractères spéciaux en entités HTML
    $var = htmlspecialchars($var);
    return $var;
}

?>