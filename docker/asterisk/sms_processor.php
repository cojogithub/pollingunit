#!/usr/bin/php -q
<?php
$stdin = fopen('php://stdin', 'r');
while ($line = fgets($stdin)) {
    $line = trim($line);
    if ($line == "") {
        break;
    }
    $matches = [];
    if (preg_match('/^agi_(\w+):\s+(.*)$/', $line, $matches)) {
        $agi[$matches[1]] = $matches[2];
    }
}
fclose($stdin);

$from = $agi['callerid'];
$sms_body = $agi['agi_arg_1'];

// Log SMS to a file (for testing)
file_put_contents('/var/log/asterisk/sms.log', "SMS from $from: $sms_body\n", FILE_APPEND);

// Optionally, send the SMS to your Laravel application
// Example: POST request to Laravel API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://laravel_app:8000/sms/receive");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['from' => $from, 'body' => $sms_body]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
