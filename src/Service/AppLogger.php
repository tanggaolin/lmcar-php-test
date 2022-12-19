<?php

namespace App\Service;


use App\Service\Logger\Log4php;
use App\Service\Logger\ThinkLog;

class AppLogger
{
    const TYPE_LOG4PHP = 'log4php';
    const TYPE_THINKLOG = 'think-log';

    private $logger;

    // 简单工厂模式
    public function __construct(string $loggerType)
    {
        if($loggerType === self::TYPE_LOG4PHP) {
            $this->logger = new Log4php();
        } else if ($loggerType === self::TYPE_THINKLOG) {
            $this->logger = new ThinkLog();
        }
    }



    public function info($message = '')
    {
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        $this->logger->error($message);
    }
}