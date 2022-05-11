<?php

/** HELPER DE INTEGRAÇÃO COM A API FALEWHATS
**  AUTOR: THIAGO HENRIQUE
*/
require_once '../src/Common.php';
require_once ('../src/classes/Envio.php');


$apikey	=	"API_WHATSAPP_KEY";


$apiWhats = new Envio($apikey);

//pegando dados do arquivo a ser enviado
$fileType = 'application/pdf';
$filename = 'arquivoPdf.pdf';
$url = 'https://alvarovelho.net/attachments/article/518/Tabela_Periodica_dos_Elementos_Quimicos2019.pdf';

//print_r($filepath);die;

/*TIPO DE MIDIA
image - uma imagem
video - um video
audio - um audio file
document - um documento*/

$response = $apiWhats->midia([
	'to' => 'SEU NUMERO',
	"url" => $url,
    "type" => 'document',
    "caption" => 'pdf tabela periodica',
    "mimeType" => $fileType,
    "nameFile" => $filename
]);

print_r($response);