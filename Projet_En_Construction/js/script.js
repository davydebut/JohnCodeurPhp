$(function () {
    $('#contact-form').submit(function (e) { // cette fonction est executée lorsque le formulaire est soumis
        e.preventDefault(); // permet d'enlever le comportement par défaut du formulaire
        $('.comments').empty(); // vide le contenu de la div .comments (les commentaires)
        var postData = $('#contact-form').serialize(); // récupère les données du formulaire et le met dans une variable postData
        $.ajax({  // envoie la variable postData au fichier script.php objet json ajax
            type: 'POST', // type de requête
            url: 'php/contact.php', // url du fichier script.php
            data: postData, // données à envoyer
            dataType: 'json', // type de données attendues
            success: function(result){
                
            }
        });
    })
});