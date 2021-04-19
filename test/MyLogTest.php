<?php
use Burkauskas\MyLog;
use PHPUnit\Framework\TestCase;

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerEquation
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \Burkauskas\MyLog::log($str));
    }
    public function providerEquation ()
    {
        return array (
            array ("something"),
            array ("some things"),
            array (001001101),
            array (false)
        );
    }
    public function testLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \Burkauskas\MyLog::log(null));
        $this->assertEquals('',  \Burkauskas\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \Burkauskas\MyLog::write(123));
        $this->assertEquals('',   \Burkauskas\MyLog::write("test"));
        $this->assertEquals('',   \Burkauskas\MyLog::write());
    }
}
?>