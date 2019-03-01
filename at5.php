<?php

print"digite a distância em km: ";
$km=(int)fgets(STDIN);

print"digite a velocidade média em km/h: ";
$kmh=(int)fgets(STDIN);

$tempo = $km / $kmh ;

print "o tempo total da viagem é: $tempo\n";
