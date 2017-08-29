<?php

require 'classes/Conta.php';

$minhaConta = new Conta();

$minhaConta ->dono='huguerson';

$minhaConta->numeroConta='05112001';

$minhaConta->saldo='10';

$minhaConta->deposita(10);

$conseguiSacar = $minhaConta->saca(300);

if ($conseguiSacar == true){
    echo "Consegui sacar \n";
}else{
    echo "Saldo insuficiente para sacar \n";
}

echo "o cliente {$minhaConta->cliente} possui saldo de {$minhaConta->saldo}";