<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles.css">
    <title>Contactez-moi !</title>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form method="post" action="" id="contact-form" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="blue"> *</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom<span class="blue"> *</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email<span class="blue"> *</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Votre email">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message<span class="blue"> *</span></label>
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Votre message"></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <p class="blue"><strong>* Ces informations sont requises</strong></p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>