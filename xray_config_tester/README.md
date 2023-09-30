# xray_config_tester
automatic tester of v2ray link using xray-core

# how to run
<code>python3 xray_config_tester.py</code><br>
<code>do_test(config_link="your_v2ray_link")</code><br>
<code>do_test(http_port="45000" , config_filename="ali.json" , config_link="your_v2ray_link")</code>

# run in parallel
you can call do_test() in parallel threads<br>
just set different config filename and listen port for each thread<br>
note that when you set port=N , two port opened by xray<br>
port=N for http & port=N-1 for socks<br>

# what do_test() return
- is_test_ok   : if config is working or not
- Ave_speed    : approximate DL speed (Mbps)
- Ave_latency  : approximate latency (Sec)
- config_alias : name of config
- config_hash  : unique hash of config independent of alias and inbounds (16 bytes)

# requirements
<code>
install java
install python
install pip
pip install requests
pip install pysocks  (needed if you use socks)
chmod 777 Link2Json.jar
chmod 777 xray-linux
setup parameters at begining and end of xray_config_tester.py
</code>

