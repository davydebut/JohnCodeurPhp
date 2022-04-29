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

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
    <title>Contactez-moi !</title>
</head>

<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="contact-form" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="blue"> *</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
                            <p class="comments"><?php echo $firstnameError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue"> *</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
                            <p class="comments"><?php echo $nameError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="blue"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
                            <p class="comments"><?php echo $emailError; ?></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>">
                            <p class="comments"><?php echo $phoneError; ?></p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message<span class="blue"> *</span></label>
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Votre message"><?php echo $message; ?></textarea>
                            <p class="comments"><?php echo $messageError; ?></p>
                        </div>
                        <div class="col-md-12">
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>
                    </div>
                    <p class="thank-you" style="display:<?php if ($isSucces) echo 'block';
                                                        else echo 'none'; ?>;">Votre message à bien été envoyé. Merci de m'avoir contacté :)</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>