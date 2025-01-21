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
}