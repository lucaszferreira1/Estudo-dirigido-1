<?php

print "Qual o preço da mercadoria:";
  $mercadoria=fgets(STDIN);
print "Quanto de desconto:";
  $desconto=fgets(STDIN);

$precodesconto=($mercadoria*($desconto/100));
$precofinal=$mercadoria-$precodesconto;

print "O desconto foi de $precodesconto";
print "O preço final é de $precofinal";
