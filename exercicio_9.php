<?php

print "Qual o tamanho da área a ser pintada,em metros quadrados:";
$area=(float)fgets(STDIN);
print "Qual método de preço deseja usar(1,2,3):";
$metodo=(int)fgets(STDIN);

$totallitros=($area/6);
$latarendimento=(18*6);
$galaorendimento=(3.6*6);

if ($metodo==1){
$nlatas=$totallitros/18;
$nlatas=ceil($nlatas);
$precolatas=$nlatas*80;
print "\n São $nlatas latas";
print "\n Vai dar $precolatas reais \n";}


if ($metodo==2){
$ngaloes=$totallitros/3.6;
$ngaloes=ceil($ngaloes);
$precogaloes=$ngaloes*25;
print "\n São $ngaloes galões";
print "\n Vai dar $precogaloes reais \n";}


if ($metodo==3){
    $nlatas=(int) $totallitros/($latarendimento);
    $faltou= $totallitros%($latarendimento);
    $ngaloes=ceil($faltou/$galaorendimento);
    $nlatas=ceil($nlatas);

    $precolatas=$nlatas*80;
    $precogaloes=$ngaloes*25;
    $precototal=$precogaloes+$precolatas;

    print "$nlatas latas - $ngaloes galoes";
    print "O preço total é $precototal reais";
