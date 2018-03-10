<?php

if ($_GET['q'] != null) {
    $output = shell_exec('cat '.$_GET['q']);
    $str = str_replace(array("\r\n", "\r", "\n"), "\n", $output);
    $array = explode("\n", $str);
}else{
    $output = shell_exec('ls /tmp/isodl-*');
    $array = preg_split('/\s+/', trim($output));
}
echo json_encode($array);
