<?php

print "Qual o tamanho da área a ser pintada,em metros quadrados:";
$area=(float)fgets(STDIN);
print "Qual método de preço deseja usar(1,2,3):";
$metodo=(int)fgets(STDIN);

$totallitros=($area/6)*1.1;

if ($metodo==1){
$nlatas=$totallitros/18;
$nlatas=ceil($nlatas);
$precolatas=$nlatas*80;
print "\n São $nlatas latas";
print "\n Vai dar $precolatas reais \n";}


if ($metodo==2){
$ngaloes=$totallitros/3.6 ;
$ngaloes=ceil($ngaloes);
$precogaloes=$ngaloes*25;$nlatasgaloes=($totallitros/18) //parte decimal multiplicar por 18 e dividir o resultado por 3.6
;
$nlatasbaixo=floor($totallitros);
$partedecimal=$totallitros-$nlatasbaixo;
$quasengaloes=($partedecimal*18);
$ngaloes=($quasengaloes)/3.6;
$nlatas=$partedecimal;
print "\n São $ngaloes galões";
print "\n Vai dar $precogaloes reais \n";}


if ($metodo==3){
$nlatasgaloes=($totallitros/18) //parte decimal multiplicar por 18 e dividir o resultado por 3.6
;
$nlatasbaixo=floor($totallitros);
$partedecimal=$totallitros-$nlatasbaixo;
$quasengaloes=($partedecimal*18);
$ngaloes=($quasengaloes)/3.6;
$nlatas=$partedecimal;
print "$ngaloes galoes e $nlatas latas";

}
