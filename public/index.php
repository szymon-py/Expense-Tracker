<?php


$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . 'app.php';
require APP_PATH . 'helper.php';

$files = getTransactionFiles(FILES_PATH);

$transactions = [];

foreach ($files as $file) {
    $transactions = array_merge($transactions, getTransactions($file));
}

$totals = calculateTotal($transactions);

require VIEWS_PATH . 'transactions.php';
