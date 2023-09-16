<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;

class CelulasDoTitulo
{
    public function mesclarCelulas($planilha)
    {
        $planilha->mergeCells('A1:D1');
    }

    public function definirEstilo($planilha)
    {
        $estilo = [
            'font' => [
                'bold' => true,
                'size' => 16,
                'name' => 'Cambria',
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFD9D9D9'],
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ];
        $planilha->getStyle('A1:D1')->applyFromArray($estilo);
    }
}
