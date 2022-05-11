<?php

/**
* metodo para fazer o envio da request 
*/
function sendRequest($data) 
{

    $request = json_encode($data['request']);

    //die(print_r($data));

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $data['urlRequest'] . '/' . $data['key'] . '/' . $data['uriRequest'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $data['method'],
      CURLOPT_POSTFIELDS => $request,
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: application/json",
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      return json_decode($err);
    } else {
      return json_decode($response);
    }
}