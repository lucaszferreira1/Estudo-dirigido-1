<?php

print "Qual o seu salário:";
$salario=fgets(STDIN);
print "Qual a porcentagem de aumento:";
$aumento=fgets(STDIN);

$dinheiroaumento= ($salario*($aumento/100));
$aumentoreal=$dinheiroaumento+$salario;

print "Você receberá um aumento de $dinheiroaumento";
print "Seu salário será de $aumentoreal";
