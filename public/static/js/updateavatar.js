jQuery(document).ready(function(){
   'use strict';
    
    jQuery('form#user_info').submit(
        function(event){
            event.preventDefault();        

            let avatar = typeof(jQuery('#avatar').prop('files')[0]) !== 'undefined' ? jQuery('#avatar').prop('files')[0]['name'] : jQuery("#image").attr('src').slice(jQuery("#image").attr('src').lastIndexOf('/') + 1);
            if (typeof(avatar) === ''){
                avatar = 'avatar.jpg';
            }
            
            let file_data = jQuery('#avatar').prop('files')[0];
            
            var data = new FormData();
            data.append('file', file_data);           
            
            let user_info = {
                avatar: avatar
            };
           
            user_info = 'user_info=' + JSON.stringify(user_info);
            
            jQuery.ajax({
                url: '/account/updateavatar',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: 'post',
                success: function(php_script_response){
                    console.log(php_script_response);
                    switch (php_script_response) {
                        case 'Upload complete':                            
                            jQuery("#avatarimage").attr("src",'/static/upload/'+avatar);
                            document.getElementById('response').innerHTML = 'Аватар загружен';
                            break;
                        case 'Filesize is too big':
                            document.getElementById('response').innerHTML = 'Размер картинки превышает 2мб';
                            break;
                        case 'File format is not allowed':
                            document.getElementById('response').innerHTML = 'Поддерживаются форматы jpeg и png.';
                            break;
                        case 'File not found':
                            document.getElementById('response').innerHTML = 'Аватар не загружена';
                            break;
                    }
                }
            });

            jQuery.ajax({
                url: '/account/updateuseravatar',
                type: 'post',
                data: user_info,
                success: function(response){
                    console.log(response);
                    switch (response) {
                         case 'avatar updated':
                            document.getElementById('response').innerHTML = 'Данные сохранены';
                            break;
                     }
                },
                error: function(err){
                    console.log("Error", err);
                }
            });            
        }
                                                                
    )
});