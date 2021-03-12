<?php

    function getBMI($edad, $peso, $altura){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/bmi?age=".$edad."&weight=".$peso."&height=".$altura,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: fitness-calculator.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            return  "cURL Error #:" . $err;
        } else {
            return  $response;
        }
    }

    function pesoIdeal($genero, $peso, $altura){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/idealweight?gender=".$genero."&weight=".$peso."&height=".$altura,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: fitness-calculator.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            return  "cURL Error #:" . $err;
        } else {
            return  $response;
        }
    }

    function getMacros($genero,$peso,$edad, $altura, $nivelActividad,$objetivo){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/macrocalculator?age=".$edad."&gender=".$genero."&height=".$peso."&weight=".$altura."
                                &activitylevel=".$nivelActividad."&goal=".$objetivo,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: fitness-calculator.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return  "cURL Error #:" . $err;
        } else {
            return  $response;
        }
    }
    function getPorcentajeGrasaCorporal( $edad,$genero,$altura,$peso,$cuello,$cintura,$cadera){
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/bodyfat?age=".$edad."&gender=".$genero."&weigth=".$altura."&heigth=".$peso."
                                &neck=".$cuello."&waist=".$cintura."&hip=".$cadera,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: fitness-calculator.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            return  "cURL Error #:" . $err;
        } else {
            return  $response;
        }
    }

    function getmets(){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/mets",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: fitness-calculator.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return  "cURL Error #:" . $err;
        } else {
            return  $response;
        }
    }

    function getCaloriaDiarias($edad, $peso, $altura, $genero){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://fitness-calculator.p.rapidapi.com/dailycalory?age=25&gender=male&heigth=180&weigth=70",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: fitness-calculator.p.rapidapi.com",
                "x-rapidapi-key: 528bf6fa7emsh7953635f57aad0fp16a428jsncb73670b47b1"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return  "cURL Error #:" . $err;
        } else {
            return  $response;
        }
    }

?>