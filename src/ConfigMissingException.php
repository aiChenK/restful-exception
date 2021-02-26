<?php

namespace RestfulException;

use Throwable;

class ConfigMissingException extends AbstractException
{
    protected $httpCode = 500;

    public function __construct(string $message = '服务器内部错误', $description = '缺少配置', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}