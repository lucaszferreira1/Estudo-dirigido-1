<?php
 print "Quantos cigarros você fuma por dia:";
 $cigarros_diarios = (int)fgets(STDIN);

 print "Quantos anos você fuma:";
 $anos_fumado = (int)fgets(STDIN);
 
 $cigarros_fumados =($cigarros_diarios)*365*($anos_fumado);
 $minutos_perdidos = $cigarros_fumados*10;
 $horas_perdidas   = $minutos_perdidos/60;
 $dias_perdidos    = round($horas_perdidas / 24);
 print "Você perdeu $dias_perdidos dias de vida";
