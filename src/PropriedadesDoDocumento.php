<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class PropriedadesDoDocumento
{
    public function definirPropriedades($planilha)
    {
        $planilha->setCellValue('A1', 'Relatórios PHP');
    }
}
