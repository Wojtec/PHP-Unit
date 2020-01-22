<?php 

use PHPUnit\Framework\TestCase;
require 'app/util.php';

class UtilTest extends TestCase
{
    public function test_convertToSlug(){
        $cal = new Util();
        $this->assertEquals("hi,-i'm-a-new-url", $cal->convertToSlug("Hi, I'm a new Url"));
    }
}
?>
