<?php

namespace Missing;

class Urls 
{
    public static function unparse_url(array $parsed): string
    {
        $scheme = isset($parsed['scheme']) ? $parsed['scheme'] . "://" : "";
        $host = isset($parsed['host']) ? $parsed['host'] : "";
        $path = $parsed['path'] ?? '';

        return "$scheme$host$path";

    }
}