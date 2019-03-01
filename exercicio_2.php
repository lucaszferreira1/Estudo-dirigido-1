<?php

print "Quantos dias:";
 $dias=fgets(STDIN);
print "Quantas horas:";
 $horas=fgets(STDIN);
print "Quantos minutos:";
 $minutos=fgets(STDIN);
print "Quantos segundos:";
 $segundos=fgets(STDIN);

$horasfinal= ($dias*24)+$horas;
$minutosfinal= ($horasfinal*60)+$minutos;
$segundosfinal= ($minutosfinal*60)+$segundos;

print "São $segundosfinal segundos";
