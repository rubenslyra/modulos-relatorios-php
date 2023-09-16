<?php

class InformacoesDeExecucao
{
    public function exibir($tempoExecucao, $inicioExecucao, $fimExecucao, $tamanhoArquivoFormatado)
    {
        echo "Tempo de geração do arquivo: {$tempoExecucao} segundos\n";
        echo "Hora de início: " . date('Y-m-d H:i:s', $inicioExecucao) . "\n";
        echo "Hora de término: " . date('Y-m-d H:i:s', $fimExecucao) . "\n";
        echo "Tamanho do arquivo gerado: {$tamanhoArquivoFormatado}\n";
    }
}

