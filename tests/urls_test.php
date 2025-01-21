<?php

namespace Missing\tests;

use \PHPUnit\Framework\TestCase;
use Missing\Urls;

class UrlsTest extends TestCase
{
    public function test_unparse_url()
    {
        $url = '';
        $parsed = parse_url($url);
        $rebuild = Urls::unparse_url($parsed);


       $this->assertEquals($url, 'Test case for unparse_url not implement yet');
    }
}