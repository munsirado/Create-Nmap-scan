<?php
/** 
 * Create Nmap scan
 * This method is used to create Nmap scan. 
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
      CURLOPT_URL => "https://api.nmap.online/v01/start_scan",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_HTTPHEADER => [
        "content-type: multipart/form-data",
        "NMAP-API-KEY: " . NMAP_API_KEY . ""
      ],
      CURLOPT_POSTFIELDS => [
        "scan_type" => "single",
        "command" => "fast",
        "schedule" => "now",
        "target" => "certifiedhacker.com",
        "target_end" => ""
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
