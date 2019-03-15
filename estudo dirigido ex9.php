<?php
print "digite o tamanho da area a ser pintada em metros quadrados:";
$area = (int) fgets(STDIN);
$ink = $area / 6;
print "A quantidade de tinta necessaria é $ink litros\n";
$can = ceil($ink / 18);
$gallon = ceil($ink / 3.6);
$canprice = $can * 80;
$gallonprice = $gallon * 25;
$leftovers = $ink%18;
$can2 = floor($ink / 18)
$gallon2 = ceil($leftovers / 3,6);
$canandgallonprice = ($can2 * 80) + ($gallon2 * 25)
$folga = $canandgallonprice * 0.10
$money = $canandgallonprice + $folga
print "você pode comprar a tinta de 3 maneiras:\n";
print "em latas de 18 litros ficou $can latas, custando $canprice reais.";
print "em galoes de 3,6 litros ficou $gallon galoes, custando $gallonprice reais.";
print "em latas e galoes ficou $can2 latas e $gallon2 galoes, custando $canandgallonprice reais mais uma folga de $folga reais, ficando $money reais.";
