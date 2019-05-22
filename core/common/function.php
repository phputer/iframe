<?php
function p($var) {
    if(is_bool($var)) {
        var_dump($var);
    } else if (is_null($var)) {
        var_dump(NULL);
    } else {
        echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#f5f5f5;
border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
    }
}

function s($val = '', $exit = 0)
{

    $val = $val === '' ? time() : $val;
    echo "<pre>";
    print_r($val);
    echo "</pre>";
    echo("<hr>");
    if ($exit) exit;
    return;

    echo("<pre style='background:#ffffff'>");
    if (is_bool($val)) {
        var_dump($val);
    } else {
        print_r($val);
    }
    echo("</pre>");
    echo("<hr>");

}