<?php

// Get all the files in transaction_files directory
function getTransactionFiles(string $dirPath): array
{
    $files = [];
    foreach (scandir($dirPath)  as $file) {
        if (is_dir($file)) {
            continue;
        }
        $files[] = $dirPath . $file;
    }
    return $files;
}
