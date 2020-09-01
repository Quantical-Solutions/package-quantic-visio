<?php

namespace Quantic\Visio;

class Visio
{
    private static array $assets;
    private static array $scripts;
    private static string $favicon;

    public static function ignite()
    {
        define('CHECKRENDER', true);
        ob_start();
        require_once(__DIR__ . '/public/index.php');
        $content = ob_get_clean();
        echo $content;
    }

    public static function addFavicon($url)
    {
        self::$favicon = $url;
    }

    public static function addAssets($assets)
    {
        self::$assets = implode('\\n', $assets);
    }

    public static function addScripts($scripts)
    {
        self::$scripts = implode('\\n', $scripts);
    }
}