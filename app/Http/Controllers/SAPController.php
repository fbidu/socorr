<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class SAPController extends Controller
{
    private $baseURL = "http://sap.prefeitura.unicamp.br/sap/pesquisa_achados_perdidos.jsf";
    protected $viewState;
    protected $cookie;

    public function __construct()
    {
    	$this->loadCredentials();
    }

    protected function loadCredentials()
    {
    	$client = new \GuzzleHttp\Client();
     	$response = $client->request('GET', $this->baseURL);
     	$this->cookie = explode(';',$response->getHeader('Set-Cookie')[0])[0].';';
     	$crawler = new Crawler($response->getBody()->getContents());
     	$this->viewState = $crawler->filterXPath('//body/table/tbody/tr/td/div[1]/form/input[2]')->attr('value');
    }

    public function getViewState()
    {
        $client = new Client();
        $response = $client->request('GET', $this->baseURL);
        return $response->filterXPath('//body/table/tbody/tr/td/div[1]/form/input[2]')->attr('value');
    }

    public function searchDescription($description)
    {
    	$URL = "http://sap.prefeitura.unicamp.br/sap/pesquisa_achados_perdidos.jsf?javax.faces.ViewState=$this->viewState&javax.faces.partial.ajax=true&javax.faces.partial.execute=%40all&javax.faces.partial.render=mainForm%3AmainOutputPanel&javax.faces.source=mainForm%3Aj_idt44&mainForm=mainForm&mainForm%3AfilterDataFinal_input=&mainForm%3AfilterDataInicio_input=&mainForm%3AfilterIdentificacao=$description&mainForm%3AfilterLocalEncontrado=&mainForm%3Aj_idt34_focus=&mainForm%3Aj_idt34_input=&mainForm%3Aj_idt44=mainForm%3Aj_idt44";
        $client = new \GuzzleHttp\Client(['cookies' => True, 'headers' => ['Cookie' => $this->cookie]]);
        $response = $client->post($URL);
        return $response->getBody()->getContents();
    }

    public function search($name)
    {
    	$raw = $this->searchDescription($name);
    	$xml = simplexml_load_string($raw);
        $xpath = "//body/div/div[2]/div[2]/div[2]/div[2]/table";
        $xpath = "//body/div/div[2]/div[2]/div[2]/div[2]/table/tbody/tr/td";
    	$processor = new Crawler($xml->changes->update[0]->__toString());
        $data = $processor->filterXPath($xpath)->text();
        return json_encode(utf8_decode($data) != "Nenhum item encontrado");
   }
}
