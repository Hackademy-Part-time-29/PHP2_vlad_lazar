<?php









function passLen($password){
    if(strlen($password)>=10){
        return true;
    }
}
function passNum($password){
    $passArray=str_split($password);
    for($i=0;$i<strlen($password);$i++){
        if(is_numeric($passArray[$i])){
            return true;
        }
    }
}
function passChar($password){
    $passArray=str_split($password);
    for($i=0;$i<strlen($password);$i++){
        if(!is_numeric($passArray[$i])){
            return true;
        }
    }
}



function pass($password){
    if(passLen($password)==false){
        echo "La password non ha la lunghezza giusta \n";
        return false;
    }
    if(passNum($password)==false){
        echo "La password non ha numeri \n";
        return false;
    }
    if(passChar($password)==false){
        echo "La password non ha caratteri \n";
        return false;
    }
    return true;
}

do{
    $password=readline("Inserisci la tua password: ");
    pass($password);
}while(pass($password)==false);
if(pass($password)==true){
    echo "La password va bene";
}
