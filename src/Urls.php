<?php

namespace Missing;

class Urls 
{
    public static function unparse_url(array $parsed): string
    {
        $scheme = isset($parsed['scheme']) ? $parsed['scheme'] . "://" : "";
        $host = isset($parsed['host']) ? $parsed['host'] : "";
        $path = $parsed['path'] ?? '';
        $port = isset($parsed['port']) ? ':' . $parsed['port'] : '';

        return "$scheme$host$port$path";

    }
}