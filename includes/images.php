<?php
/**
 * Site image helper — loads CMS-managed image paths with safe fallbacks.
 */
require_once __DIR__ . '/db.php';

function site_images_map(): array
{
    static $map = null;
    if (is_array($map)) {
        return $map;
    }

    $map = [];
    try {
        $rows = db()->query('SELECT image_key, file_path FROM site_images')->fetchAll();
        foreach ($rows as $row) {
            $map[$row['image_key']] = $row['file_path'];
        }
    } catch (Throwable $e) {
        $map = [];
    }
    return $map;
}

function site_img(string $key, string $fallback = ''): string
{
    $map = site_images_map();
    $path = $map[$key] ?? $fallback;
    return $path !== '' ? $path : $fallback;
}

function site_img_style(string $key, string $fallback = '', string $extra = ''): string
{
    $url = htmlspecialchars(site_img($key, $fallback), ENT_QUOTES, 'UTF-8');
    $extra = trim($extra);
    return "background-image: url('{$url}');" . ($extra !== '' ? ' ' . $extra : '');
}
