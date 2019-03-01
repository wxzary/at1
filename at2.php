<?php

print"digite seus dias gastos: ";
$dias=(int)fgets(STDIN);

print"digite suas horas gastas: ";
$horas=(int)fgets(STDIN);

print"digite seus minutos gastos: ";
$minutos=(int)fgets(STDIN);

print"digite seus segundos gastos: ";
$segundos=(int)fgets(STDIN);

$diasemsegundos = $dias*86400 ;
$horasemsegundos = $horas*3600 ;
$minutosemsegundos = $minutos*60 ;
$total = $diasemsegundos + $horasemsegundos + $minutosemsegundos ;

print "o total de segundos gastos é: $total segundos\n";
