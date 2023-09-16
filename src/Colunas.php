<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;

class Colunas
{
    public function ajustarTamanhoAutomatico($planilha)
    {
        foreach (range('A', 'D') as $coluna) {
            $planilha->getColumnDimension($coluna)->setAutoSize(true);
        }
    }

    public function definirEstiloCabecalho($planilha)
    {
        $estilo = [
            'font' => ['bold' => true],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'size' => 14,
            'font-style' => 'Cambria',
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFD9D9D9'],
            ],
            'borders' => [
                'allBorders' => ['borderStyle' => Border::BORDER_THIN],
            ],
        ];
        $planilha->getStyle('A3:D3')->applyFromArray($estilo);
    }

    public function definirEstiloValorTotal($planilha)
    {
        $estilo = [
            'font' => ['bold' => true],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_RIGHT,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'size' => 16,
            'font-style' => 'Cambria',
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFD9D9D9'],
            ],
            'borders' => [
                'allBorders' => ['borderStyle' => Border::BORDER_THIN],
            ],
        ];
        $planilha->getStyle('C9:D9')->applyFromArray($estilo);
    }
}

