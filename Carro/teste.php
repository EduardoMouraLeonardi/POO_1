<?php
$idade=$_POST["num"];

    if($idade<16){
        echo"Você não pode dirigir!";
    }elseif($idade>=16 && $idade<=17){
        echo"Você não pode dirigir, mas pode votar!";
    }elseif($idade>=18 && $idade<=24){
        echo"Você pode votar, mas não pode alugar um carro!";
    }elseif($idade>=25 && $idade<=70){
        echo"Você pode fazer praticamente qualquer coisa!";
    }else{
        echo"Avalie bem o que você pode ou não fazer. Evite acidentes!";
    }