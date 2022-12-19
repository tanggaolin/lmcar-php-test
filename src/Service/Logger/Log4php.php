<?php

namespace App\Service\Logger;

class Log4php implements logger
{
    protected $logger;

    public function __construct()
    {
        $this->logger = \Logger::getLogger('log');
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