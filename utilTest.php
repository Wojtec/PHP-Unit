<?php 

use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{
    public function testconvertToSlug(){
        require 'util.php';
        $cal = new Util();



        $this->assertEquals("hi,-i'm-a-new-url", $cal->convertToSlug("Hi, I'm a new Url"));
    }


}





