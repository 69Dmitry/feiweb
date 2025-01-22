$(document).ready(function() {
$('.js-send-button').on('click', function(e) {
    e.preventDefault();

    let name = $('.callback').find('input[name="name"]').val();
    let  phone = $('.callback').find('input[name="phone"]').val();

    if (name.trim() === '' || phone.trim() === '') {
        alert('Одно из обязательных полей не заполнено');

        return;
    }

    $('.callback').find('input[name="name"]').css('display', 'none');
    $('.callback').find('input[name="phone"]').css('display', 'none');

    $('.modal-body').find('.alert').css('display', 'block');
});


$('.js-contact-button').on('click', function(e) {
    e.preventDefault();

    let form = $('#contacts__form');

    let email = form.find('input[name="email"]').val();
    let name = form.find('input[name="name"]').val();
    let comment = form.find('textarea[name="comment"]').val();

    if (email == '' || name == '' || comment == '') {
        alert('Одно из обязательных полей не заполнено');

        return;
    }
    form.css('display', 'none');    
    $('#contacts__alert').css('display', 'block');
});
});

