<?php

namespace Missing\tests;

use \PHPUnit\Framework\TestCase;
use Missing\Urls;

class Urls_test extends TestCase
{
    public function test_unparse_url()
    {
        $urls = [
            '',
            'foo',
            'http://www.google.com/',
            'http://www.google.com:8080/',
            'http://u:p@foo:1/path/path?q#frag',
            'http://u:p@foo:1/path/path?#',
            'ssh://root@host',
            '://:@:1/?#',
            'http://:@foo:1/path/path?#'
        ];

        foreach ($urls as $url) {
            $parsed = parse_url($url);
            $rebuildUrl = Urls::unparse_url($parsed);
            $parsedRebuilt = parse_url($rebuildUrl);
            
            $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct URL: '{$url}'");

        }
    }
}