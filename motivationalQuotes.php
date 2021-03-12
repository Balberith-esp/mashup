<?php

    function generaFrase(){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://bodybuilding-quotes.p.rapidapi.com/single-quote?id=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "https://bodybuilding-quotes.p.rapidapi.com/",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-api-key: {{api-key}}",
                "x-rapidapi-host: bodybuilding-quotes.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

?>