<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$cvPath = __DIR__ . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $site['cv_file']);

if (!is_file($cvPath)) {
    http_response_code(404);
    exit('CV not found.');
}

$downloadName = $site['name'] . ' - CV.pdf';
$downloadFallback = preg_replace('/[^A-Za-z0-9._-]+/', '-', $site['name']) . '-CV.pdf';

header('Content-Type: application/pdf');
header(sprintf(
    'Content-Disposition: attachment; filename="%s"; filename*=UTF-8\'\'%s',
    $downloadFallback,
    rawurlencode($downloadName)
));
header('Content-Length: ' . (string) filesize($cvPath));
readfile($cvPath);
