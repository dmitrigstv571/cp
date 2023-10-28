<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CpflController extends Controller
{
    public $meses = array(
        "Jan"  => 'Jan',
        "Feb"  => 'Fev',
        "Mar"  => 'Mar',
        "Apr"  => 'Abr',
        "May"  => 'Maio',
        "Jun" => 'Jun',
        "Jul" => 'Jul',
        "Aug"  => 'Ago',
        "Sep" => 'Set',
        "Oct"  => 'Out',
        "Nov"  => 'Nov',
        "Dec" => 'Dez'
    );
    public function busca_nome($cpf)
    {
        try {

            $client = new Client();
            $response = $client->post('http://including-completely.gl.at.ply.gg:6368/buscar', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'cpf' => "{$cpf}"
                ]
            ]);
            $response = json_decode($response->getBody(), true);

            $dados = array(
                'status' => 'success',
                'nome' => $response['dados']['NOME']
            );

            return $dados;

        } catch (\Throwable $th) {
            dd($th);
            $dados = array(
                'status' => 'error'
            );
            return response()->json($dados);
        }
    }
    public function getFaturas(Request $request)
    {
        $ins = $request->input('ins');
        $doc = $request->input('doc');

        try {

            $client = new Client();

            $response = $client->post('http://18.228.24.197:7878/fatura', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'documento' => "{$doc}",
                    'codigo' => "{$ins}"
                ],
                'timeout' => 200,
            ]);

            $response = json_decode($response->getBody(), true);

            $faturas = array();

            $valor_total = 0;



            foreach ($response as $item) {
                $mes_referencia = $item["Mês Referência"];
                $valor = $item["Valor"];
                $vencimento = $item["Vencimento"];

                // Remove a formatação de moeda e espaços em branco do valor
                $valor = str_replace(['.', ','], ['', '.'], $valor);
                $valor = trim($valor);

                if (is_numeric($valor)) {
                    $valor = (float) $valor;
                    $valor_total += $valor;

                    $fatura = array(
                        "referencia" => $mes_referencia,
                        "vencimento" => $vencimento,
                        "valor" => $valor
                    );

                    array_push($faturas, $fatura);
                }
            }

            if (strlen($doc) <= 11) {
                $nome = $this->busca_nome($doc)['nome'];
            } else {
                $nome = 'ANA CRISTINA TAVARES VILAR';
                $doc = '09500449897';
            }

            $dados = array(
                'status' => 'success',
                'valor_total' => $valor_total,
                'faturas' => $faturas,
                'doc' => $doc,
                'nome' => $nome
            );
            return response()->json($dados);
            
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error']);
        }
    }
}
