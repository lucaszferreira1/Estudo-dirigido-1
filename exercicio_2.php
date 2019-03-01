<?php

print "Quantos dias:";
 $dias=(int)fgets(STDIN);
print "Quantas horas:";
 $horas=(int)fgets(STDIN);
print "Quantos minutos:";
 $minutos=(int)fgets(STDIN);
print "Quantos segundos:";
 $segundos=(int)fgets(STDIN);

$horasfinal= ($dias*24)+$horas;
$minutosfinal= ($horasfinal*60)+$minutos;
$segundosfinal= ($minutosfinal*60)+$segundos;

print "São $segundosfinal segundos";
