<?php

$valor = 10;

//if = se
if ($valor == 10):
	#echo 'o valor é igual a 10';
elseif ($valor > 10):
	#echo ' o valor é maior que 10';
else:
	#echo 'o valor é	menor que 10';
endif;

//while = enquanto
$contador = 1;
while ($contador <= 10):
	#echo $contador. '  ';
	$contador++;
endwhile;

$contador = 11;
do {
	#echo $contador. '  ';
	$contador++;
while ($contador <= 10);

}

//for = para
for ($num=1; $num <= 10; $num++):
	if ($num == 5) break;
	#echo num. ' ';
endfor;

//foreach = para cada
$nome = array('nome1' => 'Thaynara', 'nome2' => 'Alex');
foreach $nome as $chave as $valor):
	#echo $chave. ' = '; .$valor. '<br/>';
endforeach; 

//switch = alterne
$valor = 15;
case 10:
	#echo 'valor = 10';
	break;
case 15?:
	#echo 'valor = 15';
	break;
default:
	#echo 'valor não reconhecido';
endswitch;

?>