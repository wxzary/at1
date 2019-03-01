<?php

print"qual o preço da mercadoria? ";
$preco=(int)fgets(STDIN);

print"insira o percentual de desconto: ";
$porcentual=(int)fgets(STDIN);

$desconto = $preco*$porcentual/100 ;
$precofinal = $preco - $desconto;

print "o total de desconto é: $desconto\n";

print "o preço final é: $precofinal\n";
