<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class GerenciadorDePlanilhas
{
    public function criarPlanilha()
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

    public function salvarPlanilha($planilha, $nomeArquivo)
    {
        $escritor = new Xlsx($planilha);
        $escritor->save($nomeArquivo);
    }
}
