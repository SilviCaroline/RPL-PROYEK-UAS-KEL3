<?php

$baseStorage = __DIR__ . '/../storage';
$tmpStorage  = '/tmp/storage';

if (!is_dir($tmpStorage)) {
    mkdir($tmpStorage, 0775, true);
    foreach (['app', 'framework', 'logs'] as $dir) {
        $src = "$baseStorage/$dir";
        $dst = "$tmpStorage/$dir";
        if (!is_dir($dst)) mkdir($dst, 0775, true);
    }
    foreach (['cache', 'cache/data', 'sessions', 'testing', 'views'] as $sub) {
        $path = "$tmpStorage/framework/$sub";
        if (!is_dir($path)) mkdir($path, 0775, true);
    }
}

require __DIR__ . '/../public/index.php';
