<?php

	$dianome = date("w");
	$dia = date("d");
	$mes = date("n");
	$ano = date("Y");

	$diasemana[0]="Domingo";
	$diasemana[1]="Segunda-feira";
	$diasemana[2]="Ter�a-feira";
	$diasemana[3]="Quarta-feira";
	$diasemana[4]="Quinta-feira";
	$diasemana[5]="Sexta-feira";
	$diasemana[6]="S�bado";
	
	$mesAtual[1]="Janeiro";
	$mesAtual[2]="Fevereiro";
	$mesAtual[3]="Mar�o";
	$mesAtual[4]="Abril";
	$mesAtual[5]="Maio";
	$mesAtual[6]="Junho";
	$mesAtual[7]="Julho";
	$mesAtual[8]="Agosto";
	$mesAtual[9]="Setembro";
	$mesAtual[10]="Outubro";
	$mesAtual[11]="Novembro";
	$mesAtual[12]="Dezembro";
		
		
	echo $diasemana[$dianome] . " - " . $dia . " de " . $mesAtual[$mes] . " de " . $ano;
?>