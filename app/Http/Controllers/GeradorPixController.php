<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once base_path('vendor/renatomb/php_qrcode_pix/phpqrcode/qrlib.php');
require_once base_path('vendor/renatomb/php_qrcode_pix/funcoes_pix.php');


class GeradorPixController extends Controller
{
    public function gerar_pix($valor)
    {
        $valor = str_replace('.', '', $valor);
        $valor = str_replace(',', '', $valor);
        $valor = str_replace('R$', '', $valor);
        $valor = intval($valor);
        $valor = $valor / 100;

        $px[00] = "01";
        $px[26][00] = "BR.GOV.BCB.PIX";
        $px[26][01] = env('APICPF');

        $px[52] = "0000";
        $px[53] = "986";
        $px[54] = $valor;
        $px[58] = "BR";
        $px[59] = "CPFL ENERGIA";
        $px[60] = "BRASIL";
        $px[62][05] = "***";

        $pix = montaPix($px);
        $pix .= "6304";
        $pix .= crcChecksum($pix);

        $response = array(
            "img" => "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={$pix}",
            "code" => $pix
        );
        return $response;
    }
}
