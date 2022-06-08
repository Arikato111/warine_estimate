<?php
function styleImport($dir) {
    $file = file_get_contents($dir);
    echo <<<HTML
        <style>
            {$file}
        </style>
    HTML;
}