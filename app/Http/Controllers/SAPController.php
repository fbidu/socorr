<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SAPController extends Controller
{
    private $baseURL = "http://sap.prefeitura.unicamp.br/sap/pesquisa_achados_perdidos.jsf";

    public function getViewState()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $this->baseURL);
        return $response->getBody();
    }

}
