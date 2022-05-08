
$('#frmSendMail').submit(function () {

    var name = $.trim($('#name').val());
    var email = $.trim($('#email').val());
    var phone = $.trim($('#phone').val());
    var conpany = $.trim($('#conpany').val());
    var message = $.trim($('#message').val());
    var check = true;

    var err = '';

    if (name === '') {
        err += 'Field "Your Name" Empty<br>';
        check = false;
    }
    if (email === '') {
        err += 'Field "Email Address" Empty<br>';
        check = false;
    }
    if (phone === '') {
        err += 'Field "Phone" Empty<br>';
        check = false;
    }
    if (conpany === '') {
        err += 'Field "Conpany" Empty<br>';
        check = false;
    }
    if (message === '') {
        err += 'Field "Message" Empty<br>';
        check = false;
    }

    if (check === false) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            html: err,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Try Again!'
        })
    }

    return check;
});