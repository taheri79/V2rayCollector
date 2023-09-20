<?php

include 'check_host.php';
function ping($ip, $port)
{
    $it = microtime(true);
    $check = @fsockopen($ip, $port, $errno, $errstr, 0.5);
    $ft = microtime(true);
    $militime = round(($ft - $it) * 1e3, 2);
    if ($check) {
        fclose($check);

        $request_id = check_host($ip,$port);
        accuracy(3);
        $realPing =  check_ping($request_id);
        if ($realPing > 0){
            return $militime;
        }else{
            return "unavailable";
        }

    } else {
        return "unavailable";
    }
}
echo ping('dalfak.com',80);