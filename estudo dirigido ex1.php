<?php
print "digite um valor em metros:";
$meters = (int) fgets(STDIN);
$milimeters = $meters * 1000;
print "o valor em milimetros corresponde a: $milimeters mm\n";
