function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
$(document).ready(function () {
    function Toast(msg) {
        iziToast.info({
            position: 'topRight',
            message: msg,
            onOpening: function () {
                $('#form_submit').attr('disabled', true);
            },
            onClosing: function () {
                $('#form_submit').removeAttr('disabled');
            }
        });
    }
    $('#form_submit').click(function () {
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        if (name.length < 3) {
            Toast('Adınızı daxil edin');
            return;
        }
        if (email == '') {
            Toast('E-mail ünvanınızı daxil edin');
            return;
        }
        if (!isEmail(email)) {
            Toast('E-mail ünvanınızı düzgün daxil edin');
            return;
        }
        if (message == '') {
            Toast('Mesajınızı daxil edin');
            return;
        }
        $(this).attr('disabled', true);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/send-mail',
            type: 'POST',
            data: {
                name: name,
                email: email,
                message: message
            },
            success: function (response) {
                iziToast.success({
                    position: 'topRight',
                    message: response.message
                });
                $('#name').val('');
                $('#email').val('');
                $('#message').val('');
                $('#form_submit').removeAttr('disabled');
            }
        });
    });
});