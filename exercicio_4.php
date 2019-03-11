<?php
print "Qual o preço da mercadoria:";
  $mercadoria=(float)fgets(STDIN);
print "Quanto de desconto:";
  $desconto=(float)fgets(STDIN);
$precodesconto=($mercadoria*($desconto/100));
$precofinal=$mercadoria-$precodesconto;
print "O desconto foi de $precodesconto Reais \n";
print "O preço final é de $precofinal Reais \n";
