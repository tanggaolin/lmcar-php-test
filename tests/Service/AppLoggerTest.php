<?php

namespace Test\Service;

use PHPUnit\Framework\TestCase;
use App\Service\AppLogger;

/**
 * Class ProductHandlerTest
 */
class AppLoggerTest extends TestCase
{

    public function testInfoLog()
    {
        $logger = new AppLogger(AppLogger::TYPE_LOG4PHP);
        $logger->info('This is info log message');

        $logger = new AppLogger(AppLogger::TYPE_THINKLOG);
        $logger->info('This is info log message');

        $filePath = sprintf("logs/%s/%s_cli.log", date("Ym"), date("d"));
        $fp = file($filePath);
        $checkLog = $fp[count($fp)-1];
        $this->assertStringContainsString(strtoupper('This is info log message'), $checkLog);
    }


}