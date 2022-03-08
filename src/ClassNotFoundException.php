<?php

namespace RestfulException;

use Throwable;

class ClassNotFoundException extends ServerException
{
    protected $httpCode = 500;

    public function __construct(string $message = '服务器内部错误', $description = 'Class Not Found', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
