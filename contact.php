<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method not allowed.',
    ]);
    exit;
}

$name = trim($_POST['user_name'] ?? '');
$email = trim($_POST['user_email'] ?? '');
$message = trim($_POST['user_message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please fill in all fields.',
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter a valid email address.',
    ]);
    exit;
}

$logDir = __DIR__ . DIRECTORY_SEPARATOR . 'storage';
if (!is_dir($logDir)) {
    mkdir($logDir, 0755, true);
}

$entry = sprintf(
    "[%s] %s <%s>\n%s\n\n",
    date('c'),
    $name,
    $email,
    $message
);

file_put_contents($logDir . DIRECTORY_SEPARATOR . 'contact-messages.log', $entry, FILE_APPEND | LOCK_EX);

echo json_encode([
    'status' => 'success',
    'message' => 'Message sent successfully.',
]);
