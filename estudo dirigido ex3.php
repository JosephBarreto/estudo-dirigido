<?php
print "digite o valor do salario:";
$salary = (int) fgets(STDIN);
print "digite a porcentagem de aumento do salario:";
$percent = (int) fgets(STDIN);

$salary = (($percent/100) * $salary) + $salary;
print "o novo salario é: $salary\n";

