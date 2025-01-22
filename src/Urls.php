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
        $user = $parsed['user'] ?? '';
        $pass = isset($parsed['pass']) ? ':' . $parsed['pass'] : '';
        $auth = ($user || $pass) ? "$user$pass@" : '';
        $query = isset($parsed['query']) ? "?" . $parsed['query'] : "";
        $fragment = isset($parsed['fragment']) ? "#" . $parsed['fragment'] : "";

        return "$scheme$auth$host$port$path$query$fragment";

    }
}