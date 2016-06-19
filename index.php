<?php
date_default_timezone_set('America/Sao_Paulo');

$abertura 	= '07:00';
$fechamento = '15:53';
$horarioAtual = date("H:i");



if($horarioAtual >= strtotime($abertura) || $horarioAtual < $fechamento){
	echo "Estabelecimento Aberto";
}else{
	echo "Estabeleccimento Fechado";
}