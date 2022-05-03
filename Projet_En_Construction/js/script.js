$(function () {
    $('#contact-form').submit(function (e) { // cette fonction est executée lorsque le formulaire est soumis
        e.preventDefault(); // permet d'enlever le comportement par défaut du formulaire
        $('.comments').empty(); // vide le contenu de la div .comments (les commentaires)
        var postData = $('#contact-form').serialize(); // récupère les données du formulaire et le met dans une variable postData
        $.ajax({ // envoie la variable postData au fichier script.php objet json ajax
            type: 'POST', // type de requête
            url: 'php/contact.php', // url du fichier script.php
            data: postData, // données à envoyer
            dataType: 'json', // type de données attendues
            success: function (json) {
                if (json.isSuccess) { // si le script.php renvoie true
                    $('#contact-form').append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>");
                    $('#contact-form')[0].reset(); // vide le formulaire
                } else {
                    $('#firstname + .comments').html(json.firstnameError);
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#message + .comments').html(json.messageError);
                }
            }
        });
    })
});