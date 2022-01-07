<?php

namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class connect
{
    public  function login($url)
    {
        $curl = curl_init();
        $token = session('token');
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($err) {
            return "";
        } else {
            return $response;
        }
    }
    public function apiget($url)
    {
        $ch = curl_init();
        $token = session('token');
        curl_setopt_array($ch, array(      
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT      => $_SERVER['HTTP_USER_AGENT'],
            CURLOPT_REFERER        => 'https://www.google.com/',
            CURLOPT_ENCODING       => "",
            CURLOPT_HEADER          => 0,
            
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 5,
            
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "GET",
            CURLOPT_HTTPHEADER     => array(
                "Accept: */*",
                "Authorization: " . $token
            )   
        ));
        $data = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if($err){
            return "Curl error";
        }
        else{
            return ($data);
        }
    }
    public function apipost($url, $data)
    {
        $token = session('token');
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authorization: " . $token));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($result);
        if ($res == null) {
            die("api return data null");
        }
        return $result;
    }
    public function apipostkhac($url)
    {
        $token = session('token');
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "Authorization: " . $token));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($result);
        if ($res == null) {
            die("api return data null");
        }
        return $result;
    }
    public function check_login()
    {
        if (Session::has('token')) {
            return true;
        } else {
            return false;
        }
    }
}