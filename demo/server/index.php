<?php
date_default_timezone_set('Asia/Tokyo');

// Allow cross domain access control
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}

// Content type
header("Content-Type: text/javascript; charset=utf-8");

// Response
$json_array = array(
    'time'           => date("Y-m-d H:i:s"),
    'chunk-id'       => $_SERVER["HTTP_CHUNK_ID"],
    'chunk-max-id'   => $_SERVER["HTTP_CHUNK_MAX_ID"],
    'file-mime'      => $_SERVER["HTTP_FILE_MIME"],
    'file-extension' => $_SERVER["HTTP_FILE_EXTENSION"],
);
echo json_encode($json_array);

// Save split file
$fp = fopen("./chunk-" . $_SERVER["HTTP_CHUNK_ID"], "w");
fputs($fp, file_get_contents('php://input'));
fclose($fp);

// upload check of number
$all_ok = true;
for ($i = 0; $i <= $_SERVER["HTTP_CHUNK_MAX_ID"]; $i++) {
    if (!file_exists("./chunk-" . $i)) {
        $all_ok = false;
    }
}

// Join files
if ($all_ok) {
    $fp = fopen("./all." . $_SERVER["HTTP_FILE_EXTENSION"], "w");
    for ($i = 0; $i <= $_SERVER["HTTP_CHUNK_MAX_ID"]; $i++) {
        $data = file_get_contents("./chunk-" . $i);
        fputs($fp, $data);
    }
    fclose($fp);
}
