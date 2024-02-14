<?php
date_default_timezone_set("Asia/Tehran");

$Types = [
    "Helix_Servers" => ["vless"],
    "INIT1984" => ["vless"],
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

try {
    $TypesV2 = json_decode(file_get_contents("https://api.yebekhe.link/tvc-channels/channels.json"), true);
}catch (\Exception $exception){
    $TypesV2 = [];
}

foreach ($TypesV2 as $channel => $types){
    $newTypes = [];
    foreach ($types as $type){
        if ($type == 'vless' or $type == 'trojan' or $type == 'vmess' or $type == 'ss'){
            $newTypes[] = $type;
        }
    }
    $exist = false;
    foreach ($Types as $channel2 => $types2){
        if ($channel2 == $channel){
            $exist = true;
            break;
        }
    }
    if (!$exist){
        $Types[$channel] = $newTypes;
    }
}

$donated_subscription = [
    "https://yebekhe.000webhostapp.com/donate/donated_servers/donated_server.json"
];
