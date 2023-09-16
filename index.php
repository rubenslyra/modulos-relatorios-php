<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__.'/src/funcoes.modulo.php';

$inicioExecucao = microtime(true);

$planilha = criarPlanilha();
salvarPlanilha($planilha, 'arquivo.xlsx');

$fimExecucao = microtime(true);
$tempoExecucao = round($fimExecucao - $inicioExecucao, 2);
$tamanhoArquivo = filesize('arquivo.xlsx');
$tamanhoArquivoFormatado = formatarTamanhoArquivo($tamanhoArquivo);

exibirInformacoesExecucao($tempoExecucao, $inicioExecucao, $fimExecucao, $tamanhoArquivoFormatado);
