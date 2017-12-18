$(function () {

    var form = $('#ajax-contact');
    var formMessages = $('#form-messages');

    $(form).submit(function (event) {

        event.preventDefault();
        var formData = $(form).serialize();

        $.ajax({
                type: 'POST',
                url: 'php/email.php',  
                data: formData
            })


            .done(function (response) {

                $(formMessages).removeClass('error').addClass('success');


                $(formMessages).text(response);
                document.getElementById('sub_text').style.visibility='visible';

                // nettoyage du formulaire.
                $('#form_nom').val('');
                $('#form_prenom').val('');
                $('#form_societe').val('');
                $('#form_email').val('');
                $('#form_wish').val('');
            })

            .fail(function (data) {
               
                $(formMessages).removeClass('success').addClass('error');


                
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('oups il y a eu une erreur! Votre message ne peux être envoyé!');
                }
            });
    });

});

// fonction de smooth scrolling afin de ne pas avoir une descente brute au moment du click
$(function () {


    $('.renne, .btn').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

