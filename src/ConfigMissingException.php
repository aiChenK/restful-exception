<?php

namespace RestfulException;

use Throwable;

class ConfigMissingException extends ServerException
{
    protected $httpCode = 500;

    public function __construct(string $message = '服务器内部错误', $description = '配置缺失', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
