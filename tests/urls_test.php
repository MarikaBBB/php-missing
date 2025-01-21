<?php

class UrlsTest extends \PHPUnit\Framework\TestCase 
{
    public function test_unparse_url()
    {
        $url = '';
        $parsed = parse_url($url);
        $rebuild = Urls::unparse_url($parsed);


       $this->assertEquals('Test case for unparse_url not implement yet');
    }
}