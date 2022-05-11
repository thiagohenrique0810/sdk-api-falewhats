<?php

/**
* metodo para fazer o envio da request 
*/
function sendRequest($data) 
{

    //die(json_encode($data['request']));

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $data['url'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($data['request']),
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "content-type: application/json",
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    //die(print_r(json_decode($response)));

    if ($err) {
      return json_decode($err);
    } else {
      return json_decode($response);
    }
}