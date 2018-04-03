function inputCheck(str){
    if(str === ""){
        document.getElementById('response').innerHTML = 'Все поля обязательны для заполнения';
        return false;
    }
    
    if(str.length < 2){
        document.getElementById('response').innerHTML = 'Длина полей должна быть более двух символов!';
        return false;
    }
    
    if(str.indexOf(" ", str.length-1) >= 0){
        str = str.substr(0, str.length-1);
    } else if(str.lastIndexOf(" ", 0) >= 0){
        str = str.substr(1, str.length-1);
    } else {
        return str;
    }
    
    return inputCheck(str);
}