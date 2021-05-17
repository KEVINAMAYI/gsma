<?php

/**
 * DEFINES THE APIS CALLS  TO BE USED BY GSMA API 
 */
class GSMAApiCalls 
{


//request transfer
//https://sandbox.mobilemoneyapi.io/2/oauth/simulator/v1.2/mm/quotations 
  public  function requestTransfer($token,$sender_msisdn,$sender_firstname,$sender_middlename,$sender_lastname,$sender_currency_country,$sender_occupation,$sender_email,$sender_mobile_number,$sender_postal_code,$receiver_msisdn,$amount)
  { 


    $transfer_data = array (
      'creditParty' => 
      array (
        0 => 
        array (
          'key' => 'msisdn',
          'value' => $receiver_msisdn,
        ),
      ),
      'debitParty' => 
      array (
        0 => 
        array (
          'key' => 'msisdn',
          'value' => $sender_msisdn,
        ),
      ),
      'requestAmount' => $amount,
      'requestCurrency' => $sender_currency_country,
      'requestDate' => '2018-07-03T11:43:27.405Z',
      'type' => 'inttransfer',
      'subType' => 'abc',
      'chosenDeliveryMethod' => 'agent',
      'senderKyc' => 
      array (
        'nationality' => 'GB',
        'dateOfBirth' => '1970-07-03T11:43:27.405Z',
        'occupation' => $sender_occupation,
        'employerName' => 'MFX',
        'contactPhone' => $sender_mobile_number,
        'gender' => 'm',
        'emailAddress' => $sender_email,
        'birthCountry' => 'GB',
        'idDocument' => 
        array (
          0 => 
          array (
            'idType' => 'nationalidcard',
            'idNumber' => '1234567',
            'issueDate' => '2018-07-03T11:43:27.405Z',
            'expiryDate' => '2021-07-03T11:43:27.405Z',
            'issuer' => 'UKPA',
            'issuerPlace' => 'GB',
            'issuerCountry' => 'GB',
            'otherIdDescription' => 'test',
          ),
        ),
        'postalAddress' => 
        array (
          'country' => 'GB',
          'addressLine1' => '111 ABC Street',
          'city' => 'New York',
          'stateProvince' => 'New York',
          'postalCode' => $sender_postal_code,
        ),
        'subjectName' => 
        array (
          'title' => 'Mr',
          'firstName' => $sender_firstname,
          'middleName' => $sender_middlename,
          'lastName' => $sender_lastname,
          'fullName' => 'Luke R Skywalker',
          'nativeName' => 'ABC',
        ),
      ),
      'customData' => 
      array (
        0 => 
        array (
          'key' => 'keytest',
          'value' => 'keyvalue',
        ),
      ),
      'sendingServiceProviderCountry' => 'AD',
      'originCountry' => 'AD',
      'receivingCountry' => 'AD',
    );


    //tranfer data converted to json
    $transfer_json_data = json_encode($transfer_data); 

    $curl = curl_init();

    // $callbackurl = 'https://webhook.site/0dd2176c-a7bf-4d5a-933c-019e180ccfe6';
    $guid = $this->getGuid();  
    $apikey = 'Y9fBM68guZ9KuuRcZHN2caWVmaZhBwUr5l7WhLul';

    curl_setopt_array($curl, array(
     CURLOPT_URL => "https://sandbox.mobilemoneyapi.io/2/oauth/simulator/v1.2/mm/quotations",
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_ENCODING => "",
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_TIMEOUT => 30,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_SSL_VERIFYPEER => false,
     CURLOPT_SSL_VERIFYHOST => false,
     CURLOPT_CUSTOMREQUEST => "POST",
     CURLOPT_POSTFIELDS => $transfer_json_data,
     CURLOPT_HTTPHEADER => array(
      "Content-Type: application/json",
      // "X-CorrelationID: ".$guid,
      // "X-Callback-URL: ".$callbackurl,
      // "X-API-Key: ".$apikey,
      "Authorization: ".$token    
    ),
   ));

    $response = curl_exec($curl);

    $err = curl_error($curl);

    curl_close($curl);

    $data = json_decode($response);

    return $data;
  }


//process transfer
//https://sandbox.mobilemoneyapi.io/2/oauth/simulator/v1.2/mm/transactions/type/inttransfer
  public function processTransfer($token)
  {

   $transfer_data = array (
    'amount' => '100.00',
    'creditParty' => 
    array (
      0 => 
      array (
        'key' => 'accountid',
        'value' => 2000,
      ),
    ),
    'currency' => 'GBP',
    'debitParty' => 
    array (
      0 => 
      array (
        'key' => 'accountid',
        'value' => 2999,
      ),
    ),
    'internationalTransferInformation' => 
    array (
      'originCountry' => 'GB',
      'quotationReference' => '{{quotationReference}}',
      'quoteId' => '{{quoteId}}',
      'receivingCountry' => 'RW',
      'remittancePurpose' => 'personal',
      'relationshipSender' => 'none',
      'deliveryMethod' => 'agent',
      'sendingServiceProviderCountry' => 'AD',
    ),
    'senderKyc' => 
    array (
      'nationality' => 'GB',
      'dateOfBirth' => '1970-07-03T11:43:27.405Z',
      'occupation' => 'Manager',
      'employerName' => 'MFX',
      'contactPhone' => '+447125588999',
      'gender' => 'm',
      'emailAddress' => 'luke.skywalkeraaabbb@gmail.com',
      'birthCountry' => 'GB',
      'idDocument' => 
      array (
        0 => 
        array (
          'idType' => 'nationalidcard',
          'idNumber' => '1234567',
          'issueDate' => '2018-07-03T11:43:27.405Z',
          'expiryDate' => '2021-07-03T11:43:27.405Z',
          'issuer' => 'UKPA',
          'issuerPlace' => 'GB',
          'issuerCountry' => 'GB',
          'otherIdDescription' => 'test',
        ),
      ),
      'postalAddress' => 
      array (
        'country' => 'GB',
        'addressLine1' => '111 ABC Street',
        'city' => 'New York',
        'stateProvince' => 'New York',
        'postalCode' => 'ABCD',
      ),
      'subjectName' => 
      array (
        'title' => 'Mr',
        'firstName' => 'Luke',
        'middleName' => 'R',
        'lastName' => 'Skywalker',
        'fullName' => 'Luke R Skywalker',
        'nativeName' => 'ABC',
      ),
    ),
    'requestingOrganisation' => 
    array (
      'requestingOrganisationIdentifierType' => 'organisationid',
      'requestingOrganisationIdentifier' => 'testorganisation',
    ),
  );

   $transfer_json_data = json_encode($transfer_data);

        $curl = curl_init();

        // $callbackurl = 'https://webhook.site/0dd2176c-a7bf-4d5a-933c-019e180ccfe6'; 
        $guid = $this->getGuid();
        $apikey = 'Y9fBM68guZ9KuuRcZHN2caWVmaZhBwUr5l7WhLul';

        curl_setopt_array($curl, array(
         CURLOPT_URL => "https://sandbox.mobilemoneyapi.io/2/oauth/simulator/v1.2/mm/transactions/type/inttransfer",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_SSL_VERIFYPEER => false,
         CURLOPT_SSL_VERIFYHOST => false,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => $transfer_json_data,
         CURLOPT_HTTPHEADER => array(
          "Content-Type: application/json",
          "X-CorrelationID: ".$guid,
          // "X-Callback-URL: ".$callbackurl,
          "X-API-Key: ".$apikey,
          "Authorization: ".$token    
        ),
       ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        return $response;

      }


      public function getToken()
      {
       $curl = curl_init();

       curl_setopt_array($curl, array(
         CURLOPT_URL => "https://sandbox.mobilemoneyapi.io/v1/oauth/accesstoken",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_SSL_VERIFYPEER => false,
         CURLOPT_SSL_VERIFYHOST => false,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => "grant_type=client_credentials",
         CURLOPT_HTTPHEADER => array(
          "authorization: Basic MnJxcDc5MWZwMnI0bmY2Nzc4YmZjMDNjZGc6Z2xxZ2IyNG5tYm5tYjIzdTNsaHA3a2ZyZHAxajNjanQ4ajliZDcxb2NyMGQ1ZjhqYnBy",
          "cache-control: no-cache",
          "content-type: application/x-www-form-urlencoded"   
        ),
       ));

       $response = curl_exec($curl);

       $err = curl_error($curl);

       curl_close($curl);

       $data = json_decode($response);

       return $data->access_token;
     }

             //generate a unique guid
     private function getGuid($data = null) 
     {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
      $data = $data ?? random_bytes(16);
      assert(strlen($data) == 16);

      // Set version to 0100
      $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
      
      // Set bits 6-7 to 10
      $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

      // Output the 36 character UUID.
      return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }



  }


  ?>

