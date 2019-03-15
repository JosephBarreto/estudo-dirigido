<?php
print "digite quantos km foram percorridos:";
$rentedcarkm = (int) fgets(STDIN);
print "digite a quantos dias o carro foi alugado:";
$rentedcardays = (int) fgets(STDIN);

$priceoftherent = ($rentedcardays * 60) + ($rentedcarkm * 0.15);
print "o aluguel custou $priceoftherent reais\n";
