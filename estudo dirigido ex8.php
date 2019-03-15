<?php
print "digite quantos cigarros você fuma por dia:";
$cigarretesperday = (int) fgets(STDIN);
print "digite a quantos anos você fuma:"
$smokingyears = (int) fgets(STDIN);

$smokingdays = $smokingyears * 365;
$smokedcigarretes = $smokingdays * $cigarretesperday;
$minuteslost = $smokedcigarretes * 10;
$dayslost = $minuteslost / 1440;

print "você perdeu $dayslost dias!";

