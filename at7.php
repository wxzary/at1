<?php

print"quantos km você percorreu com o carro alugado? ";
$km=(int)fgets(STDIN);

print"por quantos dias você alugou o carro? ";
$dias=(int)fgets(STDIN);

$precokm = $km / 0.15 ;
$precodias = $dias * 60;
$diaskmpreco = $precokm + $precodias;

print "o preço a pagar é: $diaskmpreco\n";
