<?php
print "digite a quantidade de dias:";
$days = (int) fgets(STDIN);

print "digite a quantidade de horas:";
$hours = (int) fgets(STDIN);

print "digite a quantidade de minutos:";
$minutes = (int) fgets(STDIN);

print "digite a quantidade de segundos:";
$seconds = (int) fgets(STDIN);

$days = $days * 86400;
$hours = $hours * 3600;
$minutes = $minutes * 60;
$seconds = $days + $hours + $minutes + $seconds;

print "o total em segundos é igual a: $seconds\n";

