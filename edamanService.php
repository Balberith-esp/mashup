<?php


    function buscaIngrediente($ingrediente){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://edamam-food-and-grocery-database.p.rapidapi.com/parser?ingr=".$ingrediente,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: edamam-food-and-grocery-database.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return   $response;
        }
    }

?>