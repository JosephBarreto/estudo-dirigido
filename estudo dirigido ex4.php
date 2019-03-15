<?php

print "digite o preço da mercadoria:";
$merchandise = (int) fgets(STDIN);
print "digite o percentual de desconto:";
$discount = (int) fgets(STDIN);

$discount = ($discount/100) * $merchandise;
$merchandise = $merchandise - $discount;

print " o valor do disconto é:$discount reais\n";
print " o novo valor da mercadoria é:$merchandise reais\n";

