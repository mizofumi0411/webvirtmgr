<?php

#$url = "http://ftp.jaist.ac.jp/pub/Linux/ubuntu-jp-cdimage/releases/16.04/ubuntu-ja-16.04-desktop-amd64.iso";
$url = $_GET['u'];

echo $url;
$output = shell_exec("./request.sh $url &");
echo "$output";
