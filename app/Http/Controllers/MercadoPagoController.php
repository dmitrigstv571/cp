<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MercadoPagoController extends Controller
{
    public $client;

    public function __construct()
    {

        $this->client = new Client();
    }


    public function gerar_pessoa()
    {
        $response = $this->client->post('https://www.4devs.com.br/ferramentas_online.php', [
            'headers' => [
                'authority'          => 'www.4devs.com.br',
                'accept'             => '*/*',
                'accept-language'    => 'pt-BR,pt;q=0.9',
                'content-type'       => 'application/x-www-form-urlencoded',
                'origin'             => 'https://www.4devs.com.br',
                'referer'            => 'https://www.4devs.com.br/gerador_de_pessoas',
                'sec-ch-ua'          => '"Chromium";v="118", "Brave";v="118", "Not=A?Brand";v="99"',
                'sec-ch-ua-mobile'   => '?0',
                'sec-ch-ua-platform' => '"Windows"',
                'sec-fetch-dest'     => 'empty',
                'sec-fetch-mode'     => 'cors',
                'sec-fetch-site'     => 'same-origin',
                'sec-gpc'            => '1',
                'user-agent'         => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36'
            ],
            'form_params' => [
                'acao' => 'gerar_pessoa',
                'sexo' => 'I',
                'pontuacao' => 'S',
                'idade' => '0',
                'cep_estado' => '',
                'txt_qtde' => '1',
                'cep_cidade' => ''
            ]
        ]);
        return json_decode($response->getBody(), true);
    }


    public function gerar_pix($valor)
    {

        $valor = str_replace('.', '', $valor);
        $valor = str_replace(',', '', $valor);
        $valor = str_replace('R$', '', $valor);
        $valor = intval($valor);
        $valor = $valor / 100;

        $pessoa = $this->gerar_pessoa();


        $nome = $pessoa[0]['nome'];
        $nome = explode(" ", $nome);
        $fname = $nome[0];
        $lname = $nome[1];

        $email = $pessoa[0]['email'];
        $cpf = $pessoa[0]['cpf'];
        $cpf = explode(".", str_replace("-", "", $cpf));

        $endereco = $pessoa[0]['endereco'];
        $end_numero = $pessoa[0]['numero'];
        $bairro = $pessoa[0]['bairro'];
        $cidade = $pessoa[0]['cidade'];
        $estado = $pessoa[0]['estado'];
        $cep = $pessoa[0]['cep'];
        $cep = explode("-", $cep);


        
        $response = $this->client->post('https://api.mercadopago.com/v1/payments', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('MERCADOPAGO'),
                'Content-Type'  => 'application/json'
            ],
            'json' => [
                'transaction_amount' => $valor,
                'description' => 'Fatura',
                'payment_method_id' => 'pix',
                'payer' => [
                    'email' => $email,
                    'first_name' => $fname,
                    'last_name' => $lname,
                    'identification' => [
                        'type' => 'CPF',
                        'number' => $cpf
                    ],
                    'address' => [
                        'zip_code' => $cep,
                        'street_name' => $endereco,
                        'street_number' => $end_numero,
                        'neighborhood' => $bairro,
                        'city' => $cidade,
                        'federal_unit' => $estado
                    ]
                ]
            ]
        ]);



        $dados = json_decode($response->getBody(), true);

        $response = array(
            "img" => $dados['point_of_interaction']['transaction_data']['qr_code_base64'],
            "code" => $dados['point_of_interaction']['transaction_data']['qr_code']
        );
        return $response;
    }
}
