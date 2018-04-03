jQuery(document).ready(function () {
    'use strict';
    jQuery('form#register').submit(
        function (event) {
            event.preventDefault(); // отменяет отправку формы

            // получаем значения из input'ов и делаем проверку
            let login = inputCheck(jQuery('#login').val());
            let name = inputCheck(jQuery('#name').val());
            let email = inputCheck(jQuery('#email').val());
            let pwd = inputCheck(jQuery('#pwd').val());
            let birthdate = jQuery('#birthdate').val();
            let sex = inputCheck(jQuery('#sex').val());
            let status = 'user';

            let output = jQuery('#response').val();

            if (login === 'admin') {
                status = 'admin';
            }   

            // формируем ассоциативный массив
            let user_data = {
                login: login,
                name: name,
                email: email,
                pwd: pwd,
                birthdate: birthdate,
                sex: sex,
                status: status
            };

            // формируем строку json с данными для отправки на сервер
            user_data = 'user_data=' + JSON.stringify(user_data);

            // ajax запрос
            jQuery.ajax({
                url: '/account/register', // обработчик данных на сервере
                type: 'post', // метод, которым отправляем данные
                data: user_data, // отправляемые данные (строка json)
                success: function (response) {  // функция, которая будет обрабатывать ответ сервера
                    console.log("response", response);
                    switch (response) {
                        case 'user add':
                            window.location = "/";
                            break;
                        case 'user exists':
                            console.log("Пользователь с таким логином уже существует");
                            document.getElementById('response').innerHTML = 'Пользователь с таким логином уже существует';
                            break;
                        case 'error':
                            console.log("Ошибка регистрации");
                            document.getElementById('response').innerHTML = 'Ошибка регистрации';
                            break;
                    }
                },
                // функция, которая отработае, если не получится соедениться с сервером
                error: function (err) {
                    console.log("Error", err);
                    document.getElementById('response').innerHTML = 'Не удаётся соедениться с сервером';
                }
            });
        }
    )

});