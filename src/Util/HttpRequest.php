<?php
namespace App\Util;

class HttpRequest {
    function get($url) {
        // 方便测试，伪造数据
//        $ch = curl_init($url);
//        curl_setopt($ch, CURLOPT_HEADER, false);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        $result = curl_exec($ch);
//        curl_close($ch);
        $result = '{"error":0,"data":{"id": 1, "username":"hello world"}}';
        return $result;
    }
}