<?php
include "modules/get_data.php"; // Include the get_data module

$channels = [
//    "Helix_Servers" => ["vless"],
//    "INIT1984" => ["vless"],
    "Parsashonam" => ["vless"],
    "shopingv2ray" => ["vless"],
    "v2_team" => ["vmess", "vless"],
    "NIM_VPN_ir" => ["vless"],
    "XsV2ray" => ["vless"],
    "WebShecan" => ["vless"],
    "reality_daily" => ["vless"],
    "L_AGVPN13" => ["vless"],
    "VlessConfig" => ["vless"],
    "VPNCUSTOMIZE" => ["vless"],
    "ipV2Ray" => ["vless"],
    "melov2ray" => ["vless"],
    "V2pedia" => ["vless"],
    "frev2ray" => ["vless"],
    "ARv2ray" => ["vless"],
    "shh_proxy" => ["vless"],
    "LoRd_uL4mo" => ["vmess", "vless"],
    "zen_cloud" => ["vmess", "vless"],
    "Lockey_vpn" => ["vless"],
    "rxv2ray" => ["vless"],
    "free_v2rayyy" => ["vmess", "vless"],
    "VpnProSec" => ["vless"],
    "lightning6" => ["vless"],
    "V2rayNGmat" => ["vless"],
    "vpn_xw" => ["vless"],
    "FOX_VPN66" => ["vless"],
    "bypass_filter" => ["vless"],
    "CloudCityy" => ["vless"],
    "CUSTOMVPNSERVER" => ["vmess", "vless"],
    "DigiV2ray" => ["vless"],
    "DarkTeam_VPN" => ["vless"],
    "proxy_kafee" => ["vless"],
    "V2raysFree" => ["vless"],
    "LuminousNet" => ["vless"],
    "Awlix_V2RAY" => ["vless"],
    "liq_VPN" => ["vless"],
    "v2logy" => ["vless"],
    "Watashi_VPN" => ["vmess", "vless", "trojan", "ss"],
    "servermomo" => ["vless", "trojan", "ss"],
    "ipcloudflaree" => ["vless", "trojan", "ss"],
    "iP_CF" => ["vless", "vmess", "trojan", "ss"],
    "V2rayCollector" => ["vless"],
    "azadi_az_inja_migzare" => ["vmess", "vless", "ss"],
    "V2rayCollectorDonate" => ["vmess", "vless", "trojan", "ss"],
    "ProxyForOpeta" => ["vless"],
    "VpnWLF" => ["vmess", "vless"],
    "V2rayNGn" => ["vmess", "vless"],
    "free4allVPN" => ["vmess", "ss"],
    "PrivateVPNs" => ["trojan"],
    "DirectVPN" => ["trojan"],
    "v2ray_outlineir" => ["vmess"],
    "mftizi" => ["vmess"],
    "V2rayNG_im" => ["vmess"],
    "DeamNet_Proxy" => ["vmess", "ss"],
    "vmess_vless_pro" => ["vmess", "vless", "ss"],
    "oneclickvpnkeys" => ["vmess", "trojan"],
    "Outline_Vpn" => ["vless"],
    "prrofile_purple" => ["vmess", "vless"],
    "ShadowSocks_s" => ["vless"],
    "VPNGate_Config" => ["vmess", "vless", "ss"],
    "customv2ray" => ["vmess", "vless"],
    "UnlimitedDev" => ["vless"],
    "vmessorg" => ["vmess", "vless"],
    "v2rayNG_Matsuri" => ["vless"],
    "v2rayngvpn" => ["vless"],
    "FalconPolV2rayNG" => ["vless"],
    "ShadowProxy66" => ["vmess", "vless"],
    "PAINB0Y" => ["vless"],
    "hashmakvpn" => ["vmess"],
    "ServerNett" => ["vless"],
    "Proxy_PJ" => ["vmess", "vless"],
    "V2rayng_Fast" => ["vmess"],
    "v2ray_swhil" => ["vmess", "vless", "trojan"],
    "proxyymeliii" => ["vmess", "vless", "trojan", "ss"],
    "MsV2ray" => ["vless"],
    "v2ray1_ng" => ["vmess", "vless", "trojan"],
    "vless_vmess" => ["vmess", "vless"],
    "MTConfig" => ["vmess", "vless", "ss"],
    "vmess_vless_v2rayng" => ["vmess", "vless", "trojan", "ss"],
    "Cov2ray" => ["vmess"],
    "V2RayTz" => ["vless", "trojan"],
    "VmessProtocol" => ["vless", "trojan", "ss"],
    "MehradLearn" => ["vless"],
    "SafeNet_Server" => ["vmess", "vless"],
    "lrnbymaa" => ["vless"],
    "OutlineVpnOfficial" => ["ss"],
    "v2ray_vpn_ir" => ["vmess", "vless", "trojan"],
    "ConfigsHUB" => ["vmess", "vless", "trojan"],
    "V2rayngninja" => ["vless", "ss"],
    "iSegaro" => ["vless"],
    "bright_vpn" => ["vless", "ss"],
    "proxystore11" => ["vless", "vmess", "trojan"],
    "yaney_01" => ["vmess", "trojan", "ss"],
    "rayvps" => ["vless"],
    "free1_vpn" => ["vmess", "vless", "vless"],
    "Hope_Net" => ["vmess"],
    "VPNCLOP" => ["vless"],
    "fnet00" => ["vmess", "vless", "trojan"],
    "polproxy" => ["vless"],
    "Outlinev2rayNG" => ["vless"],
    "Royalping_ir" => ["vmess"],
    "v2rayng_vpnrog" => ["vless"],
    "v2rayng_config_amin" => ["vless", "vmess"],
    "Capital_NET" => ["vless"],
    "VpnFreeSec" => ["vless"],
    "v2Line" => ["vmess"],
    "God_CONFIG" => ["vless"],
    "Awlix_ir" => ["vmess"],
    "FreakConfig" => ["vmess", "vless"],
    "vpnmasi" => ["vless"],
    "BestV2rang" => ["vless"],
    "V2parsin" => ["vmess", "vless"],
    "IRN_VPN" => ["vless"],
    "flyv2ray" => ["vless"],
    "serveriran11" => ["vless"],
    "forwardv2ray" => ["vmess", "vless", "trojan", "ss"],
    "Confing_Mofti" => ["vmess", "vless", "trojan", "ss"],
];

$vmess_data = [];
$trojan_data = [];
$vless_data = [];
$shadowsocks_data = [];

foreach ($channels as $channelUsername => $type_array) {
    $count = count($type_array);
    for ($type_count = $count - 1; $type_count >= 0; $type_count--) {
        $current_type = $type_array[$type_count];
        if ($current_type === "vmess") {
            $vmess_data = array_merge(
                $vmess_data,
                get_configNew($channelUsername, $current_type)
            );
        }
        if ($current_type === "vless") {
            $vless_data = array_merge(
                $vless_data,
                get_configNew($channelUsername, $current_type)
            );
        }
        if ($current_type === "trojan") {
            $trojan_data = array_merge(
                $trojan_data,
                get_configNew($channelUsername, $current_type)
            );
        }
        if ($current_type === "ss") {
            $shadowsocks_data = array_merge(
                $shadowsocks_data,
                get_configNew($channelUsername, $current_type)
            );
        }
    }
}
$all_data = $vmess_data;
$all_data = array_merge(
    $all_data,
    $vless_data
);
$all_data = array_merge(
    $all_data,
    $trojan_data
);
$all_data = array_merge(
    $all_data,
    $shadowsocks_data
);

$imploaded = implode("\n",$all_data);
file_put_contents('./sub/mix',$imploaded);
function get_configNew($channel, $type)
{
    // Fetch the content of the Telegram channel URL
    $get = file_get_contents("https://t.me/s/" . $channel);

    $configs = get_config_itemsNew($type, $get);

    $finalConfigs = [];
    foreach ($configs[1] as $config) {
        $config = trim(removeStringsAfterHash(htmlspecialchars_decode(urldecode($config))));
        $the_config = parse_config($config, $type);


        $config = "$type://" . $config;

        $f = filtered_or_not($the_config['hostname']);
        if (!$f){
            $finalConfigs[] = $config;
        }
    }
    return $finalConfigs;
}

function get_config_itemsNew($type, $input)
{
    preg_match_all("#>" . $type . "://(.*?)<#", $input, $items);
    return $items;
}

function removeStringsAfterHash($inputString){
    // Use regex to remove # and everything after it
    $result = preg_replace('/#.*$/', '', $inputString);

    // Return the result after trimming any remaining spaces
    return trim($result);
}
