<?php

namespace Missing\tests;

use \PHPUnit\Framework\TestCase;
use Missing\Urls;

class Urls_test extends TestCase
{
    public function test_unparse_url()
    {
        $url = '';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, 'Failed  to reconstruct empty string URL');
    }

    public function testUnparseUrlString()
    {
        $url = 'foo';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct simple string URL: '{$url}'");
    }

    public function testUnparseSimpleUrl()
    {
        $url = 'http://www.google.com/';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct simple URL: '{$url}'");
    }

    public function testUnparseFullUrl()
    {
        $url = 'http://u:p@foo:1/path/path?q#frag';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct full URL: '{$url}'");
    }

    public function testUnparseUrlIncomplete()
    {
        $url = 'http://u:p@foo:1/path/path?#';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct incomplete URL: '{$url}'");
    }

    public function testUnparseUrlSsh()
    {
        $url = 'ssh://root@host';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct SSH URL: '{$url}'");
    }

    public function testUnparseMalformedUrl()
    {
        $url = '://:@:1/?#';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct malformed URL: '{$url}'");
    }

    public function testUnparseUrlWithEmptyUserAndPass()
    {
        $url = 'http://:@foo:1/path/path?#';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct URL with empty user and password: '{$url}'");
    }


    public function testUnparseUrlWithEmptyUser()
    {
        $url = 'http://:@foo:1/path/path?#';
        $parsed = parse_url($url);
        $rebuildUrl = Urls::unparse_url($parsed);
        $parsedRebuilt = parse_url($rebuildUrl);


       $this->assertEquals($parsed, $parsedRebuilt, "Failed  to reconstruct URL with empty user: '{$url}'");
    }
}