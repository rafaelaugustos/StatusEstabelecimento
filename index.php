<?php
date_default_timezone_set('America/Sao_Paulo');

// Horario de Abertura
$abertura 	= '07:00';

// Horario de Fechamento
$fechamento = '15:53';

// Hora atual
$horarioAtual = date("H:i");


// Verifica se a hora atual e maior ou igual ao da abertura e se a hora atual e menor que o fechamento
if($horarioAtual >= strtotime($abertura) || $horarioAtual < $fechamento){
	echo "Estabelecimento Aberto";
}else{
	echo "Estabeleccimento Fechado";
}


// Caso queira pegar do banco apenas os estabelecimentos que estejam abertos utilize esse SQL

// SELECT * FROM `estabelecimentos` WHERE `abertura` <= NOW() AND `fechamento` > NOW()