jQuery(document).ready(function(){
   'use strict';
    
    jQuery('form#catalog').submit(
        function(event){
            event.preventDefault();

            let category = jQuery('#category').val();
            let title = jQuery('#title').val();
            let price = jQuery('#price').val();
            let description = jQuery('#description').val();            
            let quantity = jQuery('#quantity').val();        

            let image = typeof(jQuery('#image').prop('files')[0]) !== 'undefined' ? jQuery('#image').prop('files')[0]['name'] : jQuery("#image").attr('src').slice(jQuery("#image").attr('src').lastIndexOf('/') + 1);
            if (typeof(image) === ''){
                image = 'noimage.jpg';
            }
            
            let file_data = jQuery('#image').prop('files')[0];
            
            var data = new FormData();
            data.append('file', file_data);           
            
            let goods = {
                category: category,
                title: title,
                image: image,
                description: description,
                price: price,
                quantity: quantity
            };
           
            goods = 'goods=' + JSON.stringify(goods);
            
            jQuery.ajax({
                url: '/account/uploadgoodsimage',
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
                            document.getElementById('response2').innerHTML = 'Картинка товара загружен';
                            break;
                        case 'Filesize is too big':
                            document.getElementById('response2').innerHTML = 'Размер картинки превышает 2мб';
                            break;
                        case 'File format is not allowed':
                            document.getElementById('response2').innerHTML = 'Поддерживаются форматы jpeg и png.';
                            break;
                        case 'File not found':
                            document.getElementById('response2').innerHTML = 'Картинка не загружена';
                            break;
                    }
                }
            });

            jQuery.ajax({
                url: '/account/addgoods',
                type: 'post',
                data: goods,
                success: function(response){
                    console.log(response);
                    switch (response) {
                         case 'goods added':
                            document.getElementById('response2').innerHTML = 'Данные сохранены';
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