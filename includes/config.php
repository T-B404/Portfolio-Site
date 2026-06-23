<?php

declare(strict_types=1);

$site = [
    'name' => 'Tasneem Bharmal',
    'short_name' => 'Tasneem',
    'role' => 'AI/ML Developer | Backend Engineer',
    'role_short' => 'AI/ML Developer',
    'tagline' => 'a Software Developer',
    'email' => 'tasneembharmal712@gmail.com',
    'phone' => '+91 9227215253',
    'location' => 'Ahmedabad, India',
    'cv_file' => 'link-to-cv.pdf',
    'github' => 'https://github.com/T-B404',
    'linkedin' => 'https://linkedin.com/in/tasneem-b-400880292',
    'intro_quote' => 'I build intelligent systems with Python, Django, and JavaScript — exploring ML, finance tech, and blockchain through hands-on projects.',
    'intro_quote_author' => 'Tasneem Bharmal',
];

$pageTitle = $site['name'] . ' | ' . $site['role'];
$bodyClass = 'dark';

$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
$scriptDir = dirname($scriptName);
$basePath = in_array($scriptDir, ['/', '.', '\\'], true) ? '' : rtrim($scriptDir, '/');

function siteUrl(): string
{
    static $cached = null;
    if ($cached !== null) {
        return $cached;
    }

    global $basePath, $site;

    if (!empty($site['site_url'])) {
        return $cached = rtrim($site['site_url'], '/') . '/';
    }

    $renderUrl = getenv('RENDER_EXTERNAL_URL');
    if (is_string($renderUrl) && $renderUrl !== '') {
        return $cached = rtrim($renderUrl, '/') . '/';
    }

    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    if ($host === 'tasneem-portfolio.rf.gd') {
        return $cached = 'https://tasneem-portfolio.rf.gd/';
    }

    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['SERVER_PORT']) && (string) $_SERVER['SERVER_PORT'] === '443')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');

    $scheme = $https ? 'https' : 'http';
    $prefix = $basePath === '' ? '/' : $basePath . '/';

    return $cached = $scheme . '://' . $host . $prefix;
}

function asset(string $path): string
{
    return siteUrl() . ltrim($path, '/');
}

function url(string $path = ''): string
{
    if ($path === '') {
        return siteUrl();
    }

    return siteUrl() . ltrim($path, '/');
}

function h(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
