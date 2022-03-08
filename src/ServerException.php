<?php

namespace RestfulException;

use Throwable;

class ServerException extends AbstractException
{
    protected $httpCode = 500;

    public function __construct(string $message = '服务端错误', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
