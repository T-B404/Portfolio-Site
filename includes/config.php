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

$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
$basePath = ($scriptDir === '/' || $scriptDir === '.') ? '' : rtrim($scriptDir, '/');

function asset(string $path): string
{
    global $basePath;

    return $basePath . '/' . ltrim($path, '/');
}

function url(string $path = ''): string
{
    global $basePath;

    if ($path === '') {
        return $basePath === '' ? '/' : $basePath . '/';
    }

    return $basePath . '/' . ltrim($path, '/');
}

function h(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
