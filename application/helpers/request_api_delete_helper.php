<?php
/*
Helper ini berfungsi untuk membuat keyword pada meta keyword
*/
if (!function_exists('request_api_delete')) {

    function request_api_delete($url, $data, $token=true) {

        $client = new \GuzzleHttp\Client(['http_errors' => false]);

        if($token){
          // $request_token = $client->request('GET', API_WEB.'/auth/login/36401c8b11275c2116f7eada47cbb4f2/f99e9c9e11abd769e716cb5f2b71ad31');
          $hasil_token = json_decode($request_token->getBody());
          $request_data = $client->delete($url, ['headers' => ['Authorization' => 'Bearer '.$hasil_token->token], 'query' => $data]);
        }else{
          $request_data = $client->delete($url, ['query' =>$data]);
        }

        return $request_data->getBody();

    }
}
