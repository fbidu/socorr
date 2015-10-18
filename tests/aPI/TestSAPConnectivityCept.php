<?php 
$I = new APITester($scenario);
$I->wantTo('Test if SAP is online');
$I->sendGET('http://sap.prefeitura.unicamp.br/sap/pesquisa_achados_perdidos.jsf');
$I->seeResponseCodeIs(200);

$I->seeHttpHeader('Set-Cookie');

$cookie = $I->grabHttpHeader('Set-Cookie');

$I->assertContains("JSESSIONID", $cookie);

$I->seeResponseContains('javax.faces.ViewState');
