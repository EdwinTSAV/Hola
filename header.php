<?php
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/api_rest/fs_users?login=true',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'email=wilson&password=1235',
        CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
        ),
    ));
    
    $response = json_decode(curl_exec($curl));
    curl_close($curl);
    //$hola = json_decode($response);
    print_r($response->results[0]->codagente);

    if($_SESSION['acceso']){
        echo 'hola mundo';
    }
