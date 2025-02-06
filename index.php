<?php

$password= readline('inserisci qui la password');
echo "Password inserita: " . $password . "\n";

if (strlen($password)>=8){
    echo "La tua password è lunga almeno 8 caratteri";
}
else{
    echo "La password DEVE essere più lunga di 8 caratteri";
}

for ($i=0; $i<strlen($password); $i++){
    if(is_numeric($password[$i])){
     echo "La tua password contiene un numero.Bravo!";
     break;
    }
}

for($i=0;$i<strlen($password);$i++){
    if(ctype_upper($password[$i])){
        echo "La password contiene una maiuscola";
        break;
    }
}

$special_chars=["!","@","#","$"];
for($i=0; $i < strlen($password);$i++){
if(in_array($password[$i], $special_chars))
echo "La password contiene un carattere speciale";
break;
}

function checkLength($pwd){
    if(strlen($pwd)>=8){
        echo "La password é lunga almeno 8 caratteri\n";
        return true;
    }
    else{
        echo "La password DEVE essere più lunga di 8 caratteri\n";
        return false;
    }
}

function checkNumber($pwd){
    for($i=0;$i<strlen($pwd);$i++){
        if(is_numeric($pwd[$i])){
            echo "La password contiene un numero.BRAVO!\n";
            return true;
        }

    }
}

function checkSpecialChar($pwd){
    for($i=0; $i<strlen($pwd);$i++){
        if(in_array($pwd[$i], Special_Char)){
            echo "La password contiene un carattere speciale";
            return true;

        }
    }
}

function checkUpperCase($pwd){
    for($i=0,$i<strlen($pwd);$i++){
        if(cytpe_upper($pwd[$i])){
            echo "La password contiene una maiuscola\n";
            return true;
        }
    }
}


function checkPassword($pwd){
    $first_rule= checkLength($pwd);
    $second_rule= checkNumber($pwd);
    $third_rule= checkUpperCase($pwd);
    $fourth_rule= checkSpecialChar($pwd);
    if($first_rule && $second_rule && $third_rule && $fourth_rule){
        echo "Password accettata\n";
    }
}
