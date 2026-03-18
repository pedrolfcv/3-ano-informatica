<?php
$idade = 18;
$tem_autorizaçao = false;

if($idade >= 18 || $tem_autorizaçao){
    echo "Entrada liberada";

} elseif($idade >= 18 && $tem_autorizaçao){
    echo "Nao pode entrar, vai chamar seu pai";
}
else{
    echo "entrada negada.";
}