<?php

spl_autoload_register(function (string $namespace) {
    $path = str_replace('Desenferrujando', 'src', $namespace);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);

    $fullPath = __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';

    if (!file_exists($fullPath)) {
        return;
    }

    require_once $fullPath;
});

