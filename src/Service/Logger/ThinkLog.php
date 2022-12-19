<?php

namespace App\Service\Logger;

use think\facade\Log;



class ThinkLog implements logger
{
    public function __construct()
    {
        Log::init([
            'default'	=>	'file',
            'channels'	=>	[
                'file'	=>	[
                    'type'	=>	'file',
                    'path'	=>	'./logs/',
                ],
            ],
        ]);
    }

    public function info($message = '')
    {
        $this->trace($message, 'info');
    }

    public function debug($message = '')
    {

        $this->trace($message, 'debug');
    }

    public function error($message = '')
    {
        $this->trace($message, 'error');
    }

    protected function trace($message, $level)
    {
        $message = strtoupper($message);
        Log::log($level, $message);
    }
}