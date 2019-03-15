<?php

 print "Digite a área da parede em m²: \n";
        $m = (int) fgets(STDIN);

 print "Escolha uma opçâo de compra:
        1 Latas de 18 litros
        2 Galões de 3,5 litros
        3 Misturas os dois \n";
        $opcao = (int) fgets(STDIN);


   if ($opcao === 1)

    {$litros = ceil($m / 6);
    $latas = ceil($litros / 18);
    $precofim = round($latas * 80);
  
    print "Você precisa de $litros litros para cobrir a area. Compre $latas latas, custando R$$precofim,00 \n";}


   if ($opcao === 2)

    {$litros = ceil($m / 6);
    $latas = ceil($litros / 3.6);
    $precofim = round($latas * 25);
    print "Você precisa de $litros litros para cobrir a area. Compre $latas latas, custando R$$precofim,00 \n";}


   if ($opcao === 3)
    
    {$litros = ceil($m / 6);
    $latas = ceil($litros/18);
    $resto = ceil($latas%18);
    $galoes = ceil($resto/3.6);
    $precofim = round($latas * 80 + $galoes * 25);
    $porcento = round($precofim * 10 / 100);
    $precofim = round($precofim + $porcento);
    print "Você precisa de $litros litros para cobrir a area. Compre $latas galeões de 3,6 L, talizando o custo R$$precofim,00 \n";}
