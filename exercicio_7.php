<?php

print "Quantos km foram percorridos:";
$kmpercorridos=(float)fgets(STDIN);
print "Quantos dias o carro foi alugado:";
$dias=(int) fgets(STDIN);

$preco=(60*$dias)+(0.15*$kmpercorridos);

print "São $preco Reais"
