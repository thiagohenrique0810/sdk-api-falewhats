<?php

/** HELPER DE INTEGRAÇÃO COM A API FALEWHATS
**  AUTOR: THIAGO HENRIQUE
*/
require_once '../src/Common.php';
require_once ('../src/classes/Envio.php');


$apikey	=	"API_WHATSAPP_KEY";


$apiWhats = new Envio($apikey);

$response = $apiWhats->textToMany([
	'to' => 'SEU NUMERO',
]);

print_r($response);