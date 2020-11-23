<?php

$runTime = 1000000;

$start = microtime(true) * 1000;
for ($i = 1; $i <= $runTime; $i++) {
    convert1("snake-name", "-");
}
$end = microtime(true) * 1000;
echo "php代码运行时间:" . ($end - $start) . "\n";

$start = microtime(true) * 1000;
for ($i = 1; $i <= $runTime; $i++) {
    Str\Camel::convert("snake-name", "-");
}
$end = microtime(true) * 1000;
echo "扩展运行时间" . ($end - $start) . "\n";

function convert1($str, $symbol)
{
    $pos = null;
    $after = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str{$i} == $symbol) {
            $pos = $i + 1;
            $i++;
        }
        if ($pos === $i) {
            $after .= strtoupper($str{$i});
        } else {
            $after .= $str{$i};
        }
    }
    return $after;
}