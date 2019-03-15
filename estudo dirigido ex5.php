<?php

print "digite a distancia a percorrer em metros:";
$space = (int) fgets(STDIN);
print "digite a velocidade média desejada em m/s:";
$speed = (int) fgets(STDIN);

$time= $space/$speed;
print "demorara $time segundos.";

