<?php



$password=readline("Inserisci la tua password: ");


function passLen($password){
    if(strlen($password)>=10){
        return true;
    }else{
        return false;
    }
}
function passNum($password){
    for($i=0;$i<strlen($password);$i++){
        if(is_numeric($password[$i])){
            return true;
        }
    }
    return false;
}
function passChar($password){
    for($i=0;$i<strlen($password);$i++){
        if(!is_numeric($password[$i])){
            return true;
        }
    }
    return false;
}

function password($password){
    if(passLen($password)===false){
        echo "Inserisci almeno dieci caratteri";
        return false;
    }
    if(passNum($password)===false){
        echo "Inserisci almeno un numero";
        return false;
    }
    if(passChar($password)===false){
        echo "Inserisci almeno una lettera";
        return false;
    }
    return true;
}

password($password);