<?php
print "digite o valor em celsius:";
$celsius = (int) fgets(STDIN);

$fahrenheit = 9*$celsius/5 + 32;
print "o valor em fahrenheit é:$fahrenheit\n";

