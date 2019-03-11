<?php
print "Qual foi a distancia percorrida";
 $distancia=(float)fgets(STDIN);
print "Quanto velocidade:";
 $velocidade=(float)fgets(STDIN);
$tempo=$distancia/$velocidade;
print "Levará/Levou $tempo horas";
