<?php

$password= readline("inserisci la tua password:\n");

function checkLength($string){
    if(strlen($string)>=8){
        return true;
    }
    echo "La password DEVE contenere almeno 8 caratteri \n";
    return false;
}

$firstrule= checkLength($password);

function checkUppercase($string){
    for($i=0; $i<strlen($string);$i++){
        if(ctype_upper($string[$i])){
            return true;
        }
    }
    echo "Manca una Maiuscola \n";
    return false;
}
$secondrule= checkUppercase($password);

function checkNumber($string){
    for($i=0;$i<strlen($string);$i++){
        if(is_numeric($string[$i])){
            return true;
        }
    }
    echo "Deve contenere almeno un numero \n";
    return false;
}
$thirdrule= checkNumber($password);

function checkSpecial($string){
    $special_chars=["!","@","?","$"];
    for($i=0;$i<strlen($string);$i++){
        if(in_array($string[$i],$special_chars)){
            return true;
        }
    }
    echo "Inserisci almeno un carattere speciale";
    return false;
}

$fourthrule= checkSpecial($password);


function checkPassword($string){
    $firstrule= checkLength($string);
    $secondrule= checkUppercase($string);
    $thirdrule= checkNumber($string);
    $fourthrule= checkSpecial($string);

    if($firstrule && $secondrule && $thirdrule && $fourthrule){
        echo "Password accettata!\n";
    }
    return $firstrule && $secondrule && $thirdrule && $fourthrule;
}

do{
    $password= readline("Scrivi la tua password: \n");
}while(!checkPassword($password));
