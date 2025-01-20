<?php 

namespace Missing;

use InvalidArgumentException;

class Urls {

    public static function unparse_url(array $parsed): string {
        if(!is_array($parsed)) {
            throw new InvalidArgumentException("Input must be an array returned by parse_url");
        };

        $scheme = $parsed['scheme'] ?? null;
        $host = $parsed['host'] ?? null;
        $port = $parsed['port'] ?? null;
        $user = $parsed['user'] ?? null;
        $pass = $parsed['pass'] ?? null;
        $path = $parsed['path'] ?? '';
        $query = $parsed['query'] ?? null;
        $fragment = $parsed['fragment'] ?? null;
        
        $userinfo  = $pass !== null ? "$user:$pass" : $user;
        $authority = (
            ($userinfo !== null ? "$userinfo@" : "") .
            ($parsed['host'] ?? "") .
            ($port ? ":$port" : "")
        );
        return (
            ($scheme !== null ? "$scheme://" : "") .
            ($authority !== null ? "//$authority" : "") .
            ($path !== null ?? "") .
            ($query !== null ? "$query" : "") .
            ($fragment !== null ? "#$fragment" : "")
        );
    }

}

