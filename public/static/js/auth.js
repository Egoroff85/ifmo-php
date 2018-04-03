jQuery(document).ready(function() {
    'use strict';

    jQuery('form#login').submit(
        function(event) {
            event.preventDefault();
            let login = jQuery('#login_auth').val();
            let pwd = jQuery('#pwd_auth').val();
            if (!login || !pwd) {
                return;
            }

            let auth_data = {
                login: login,
                pwd: pwd,
            };

            auth_data = 'auth_data=' + JSON.stringify(auth_data);

            jQuery.ajax({
                url: '/account/login',
                type: 'post',
                data: auth_data,
                success: function(response) {
                    console.log("memo", response);
                    switch (response) {
                        case 'pwd is wrong':
                            document.getElementById('memo').innerHTML = 'Пароль не верный';
                            break;
                        case 'user not found':
                            document.getElementById('memo').innerHTML = 'Такого пользователя не существует';
                            break;
                        case 'user auth':
                            window.location = "/account";
                            break;
                        // case 'admin':
                        //     window.location = "/admin.php";
                        //     break;
                    }
                },
                error: function(err) {
                    console.log("Error", err);
                }
            });
        }

    )
});