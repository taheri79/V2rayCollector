<?php

include 'check_host.php';
function ping($ip, $port,$config)
{
    $it = microtime(true);
    $check = @fsockopen($ip, $port, $errno, $errstr, 0.5);
    $ft = microtime(true);
    $militime = round(($ft - $it) * 1e3, 2);
    if ($check) {
        fclose($check);

//        $request_id = check_host($ip,$port);
//        accuracy(3);
//        $realPing =  check_ping($request_id);
//        if ($realPing > 0){

            $test = shell_exec("cd xray_config_tester && python xray_config_tester.py '$config'");
            if (strpos($test, 'True') !== false) {
//                return round($realPing/3);
                return $militime;
            }else{
                return "unavailable";
            }

//        }else{
//            return "unavailable";
//        }

    } else {
        return "unavailable";
    }
}