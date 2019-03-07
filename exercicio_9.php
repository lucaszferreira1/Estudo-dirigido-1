<?php

print "Qual o tamanho da área a ser pintada,em metros quadrados,:";
$area=(float)fgets(STDIN);

$totallitros=($area/6)*1.1;

$nlatas=$totallitros/18 //arrendondar para cima//;
$precolatas=$nlatas*80;

$ngaloes=$totallitros/3.6 //arrendondar para cima//;
$precogaloes=$ngaloes*25;

$nlatasgaloes=($totallitros/18) //parte decimal multiplicar por 18 e dividir o resultado por 3.6//;
