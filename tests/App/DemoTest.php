<?php

namespace Test\App;

use App\App\Demo;
use App\Util\HttpRequest;
use PHPUnit\Framework\TestCase;


class DemoTest extends TestCase
{
    protected $demoObj;

    public function __construct()
    {
        $this->demoObj = new Demo(\Logger::getLogger("Log"), new HttpRequest());
        parent::__construct();
    }

    public function test_foo()
    {
        $res = $this->demoObj->foo();
        $this->assertEquals('bar', $res);
    }

    public function test_get_user_info()
    {
        $res = $this->demoObj->get_user_info();
        $this->assertIsArray($res);
        $this->assertEquals(1, $res['id']);
        $this->assertEquals("hello world", $res['username']);
    }
}
