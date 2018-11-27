<?php

$chaves = array('nome', 'endereço', 'telefone');
$valores = array('Thaynara', 'Rua tal', '0000');
$nomes = array(0 => 'Irene', 1 => 'Seulgi', 2 => 'Wendy', 3 => 'Joy', 4 => 'Yeri', 5 =>'Irene');
$cadastro = array_combine($chaves, $valores);
$numeros = array(15, 20, 30, 50);

#var_dump($cadastro); exit;

#var_dump(array_combine($chaves, $valores));
	//função: através de dois arrays diferentes, se combina e cria um terceiro
#var_dump(array_count_values($nomes));
	// função: mostrar a quantidade de vezes que um determinado valor ocorre dentro de um array
#var_dump(array_key_exists('nome', $cadastro));
	// função: verificar se um determinado indice existe
#var_dump(array_keys($cadastro));
	// função: mostrar as chaves de um array
#var_dump(array_merge($chaves, $valores));
	// função: criar chaves númericas e coloca os valores em ordem
#var_dump(array_rand($nomes));
	// função: pegar itens aleatórios
#var_dump(array_search('Yeri', $nomes));
	// função: procurar valores
#var_dump(array_sum($numeros));
	// função: somar todos os valores considerados númericos dentro do array
#var_dump(array_unique($nomes));
	// função: não usar valores repetidos
#var_dump(array_values($cadastro));
// função: mostrar os valores de um array
#var_dump(asort($nomes));
	// função: ordenar o array porém não mostra
#asort($nomes);
#var_dump($nomes);
	// função: mostra a ordem do array de A a Z
#arsort($nomes);
#var_dump($nomes);
	// função: mostra a ordem do array de Z a A
#var_dump(sizeof($nomes));
	// função: mostra o tamanho/quantidade de valores que se tem no array [também pode se usar \count]
#extract($cadastro);
	//função: transformar cada item do array em variável individual [ex: echo $telefone]
var_dump(in_array('Wendy', $nomes));