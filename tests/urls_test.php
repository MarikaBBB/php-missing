<?php declare(strict_types=1);

use \PHPUnit\Framework\TestCase;
use Missing\Urls;

class Urls_test extends \PHPUnit\Framework\TestCase {
    public function test_unparse_url() {
        $urls = [
            '',
            'foo',
            'http://www.google.com/',
            'http://u:p@foo:1/path/path?q#frag',
            'http://u:p@foo:1/path/path?#',
            'ssh://root@host',
            '://:@:1/?#',
            'http://:@foo:1/path/path?#',
            'http://@foo:1/path/path?#',
        ];
        
        
        foreach ($urls as $url) {
            $parsed = parse_url($url);
            $rebuild = Urls::unparse_url($parsed);
            
    
            $this->assertEquals($url, $rebuild, "Failed for URL: $url");
        }
    }   

}
