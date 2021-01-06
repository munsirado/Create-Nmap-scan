<?php
/** 
 * API calls report
 * This method is used for get API calls report for current member
 * 
 * @web nmap.online
 * @web api.nmap.online
 * @web www.munsirado.com
 * @copyright MUNSIRADO Group
 * 
 */
 	
	require_once("config.php");
	
    $curl = curl_init();
    
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api.nmap.online/v01/api_report",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => [
        "NMAP-API-KEY: " . NMAP_API_KEY . ""
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
