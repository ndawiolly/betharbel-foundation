



<?php
// echo json_encode($_GET);
if (!isset($_GET['q'])){
    echo json_encode([
        "status" =>  403,
        "message" => "invalid request"
    ]);
}else{
    $ref = $_GET["q"];
    $secret_key = "sk_test_ced3b84841fc0eda05c11a5a0968ba01d27ad6aa";
    $curl = curl_init();

  
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.paystack.co/transaction/verify/$ref",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $secret_key",
        "Cache-Control: no-cache",
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
  
    curl_close($curl);
    
    if ($err) {
        echo json_encode([
            "status" =>  401,
            "message" => $err,
        ]);
    } else {
        $data = json_decode($response, true);
        $data = $data['data'];
        $amount = $data['amount'] / 100;
        $channel = $data['channel'];
        $paid_at = $data['paid_at'];
        $customer_email = $data['customer']["email"]; 
        $currency = $data["currency"];
        echo json_encode([
            "status" =>  200,
            "message" => "Verified Successfully",
            // "data" => json_decode($response, true)

        ]);
    }
  
}

?>