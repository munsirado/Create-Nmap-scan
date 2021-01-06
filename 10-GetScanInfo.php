<?php
/** 
 * Get scan info
 * This method is used for Get created scan information
 * 
 * @web nmap.online
 * @web api.nmap.online
 * @web www.munsirado.com
 * @copyright MUNSIRADO Group
 * 
 */
    $curl = curl_init();
    
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api.nmap.online/v01/scan_info",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_HTTPHEADER => [
        "content-type: multipart/form-data",
        "NMAP-API-KEY: YOUR_API_KEY_HERE"
      ],
      CURLOPT_POSTFIELDS => [
        "scan_id" => "string"
      ],
      
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }