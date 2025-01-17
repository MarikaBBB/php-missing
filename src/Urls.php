<?php declare(strict_types=1);

namespace Missing;

class Urls {

    public static function unparse_url(array $parsed): string {
        $pass      = $parsed['pass'] ?? null;
        $user      = $parsed['user'] ?? null;
        $userinfo  = $pass !== null ? "$user:$pass" : $user;
        $port      = $parsed['port'] ?? 0;
        $scheme    = $parsed['scheme'] ?? null;
        $query     = $parsed['query'] ?? null;
        $fragment  = $parsed['fragment'] ?? "";
        $authority = (
            ($userinfo !== null ? "$userinfo@" : "") .
            ($parsed['host'] ?? "") .
            ($port ? ":$port" : "")
        );
        return (
            (\strlen($authority) > 0 ? "//$authority" : "") .
            ($parsed['path'] ?? "") .
            (\strlen($query) > 0 ? "?$query" : "") .
            (\strlen($fragment) > 0 ? "#$fragment" : "")
        );
    }

}

