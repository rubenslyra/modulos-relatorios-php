<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class CabecalhoEDados
{
    public function adicionarConteudo($planilha)
    {
        $celulas = [
            ['ID', 'Nome', 'Valor', 'Imagem'],
            [1, 'Teclado Midi 61 Teclas - Roland A-800PRO', '4506.16', './assets/images/teclado-1.webp'],
            [2, 'Teclado Controlador Midi 25 Teclas - M-Audio Oxygen 25 MK4', '1099.00', './assets/images/teclado-2.webp'],
            [3, 'Guitarra Semi-Acústica - Tagima Blues 3000', '3250.00', './assets/images/guitarra-3.webp'],
            [4, 'Microfone Dinâmico SM7B - Shure', '2299.00', './assets/images/microfone-4.webp'],
            [null, null, null, null],
            [null, null, 'Total', '=SUM(C4:C7)'],
        ];
        $planilha->fromArray($celulas, null, 'A3');
    }
}

