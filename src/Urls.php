<?php

namespace Missing;

class Urls 
{
    public static function unparse_url(array $parsed): string
    {
        // $scheme = isset($parsed['scheme']) ? $parsed['scheme'] . "://" : "";
        // $host = isset($parsed['host']) ? $parsed['host'] : "";

        return $parsed['path'] ?? '';

    }
}