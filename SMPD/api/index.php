<?php

ob_start();

register_shutdown_function(function () {
    $error = error_get_last();

    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        while (ob_get_level() > 0) {
            ob_end_clean();
        }
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode([
            'fatal_error' => $error,
            'php_version' => PHP_VERSION,
        ]);
    } else {
        ob_end_flush();
    }
});

$baseStorage = __DIR__ . '/../storage';
$tmpStorage  = '/tmp/storage';

if (!is_dir($tmpStorage)) {
    mkdir($tmpStorage, 0775, true);