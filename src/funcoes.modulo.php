<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/PropriedadesDoDocumento.php';
require_once __DIR__ . '/CelulasDoTitulo.php';
require_once __DIR__ . '/CabecalhoEDados.php';
require_once __DIR__ . '/Colunas.php';



use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;

function criarPlanilha()
{
    $planilha = new Spreadsheet();
    $folha = $planilha->getActiveSheet();

    $propriedades = new PropriedadesDoDocumento();
    $celulasDoTitulo = new CelulasDoTitulo();
    $cabecalhoEDados = new CabecalhoEDados();
    $colunas = new Colunas();

    $propriedades->definirPropriedades($folha);
    $celulasDoTitulo->mesclarCelulas($folha);
    $celulasDoTitulo->definirEstilo($folha);
    $cabecalhoEDados->adicionarConteudo($folha);
    $colunas->ajustarTamanhoAutomatico($folha);
    $colunas->definirEstiloCabecalho($folha);
    $colunas->definirEstiloValorTotal($folha);

    return $planilha;
}

function salvarPlanilha($planilha, $nomeArquivo)
{
    $escritor = new Xlsx($planilha);
    $escritor->save($nomeArquivo);
}

function formatarTamanhoArquivo($bytes)
{
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return $bytes . ' byte';
    } else {
        return '0 bytes';
    }
}

function exibirInformacoesExecucao($tempoExecucao, $inicioExecucao, $fimExecucao, $tamanhoArquivoFormatado)
{
    echo "Tempo de geração do arquivo: {$tempoExecucao} segundos\n";
    echo "Hora de início: " . date('Y-m-d H:i:s', $inicioExecucao) . "\n";
    echo "Hora de término: " . date('Y-m-d H:i:s', $fimExecucao) . "\n";
    echo "Tamanho do arquivo gerado: {$tamanhoArquivoFormatado}\n";
}
