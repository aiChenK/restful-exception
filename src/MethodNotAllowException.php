<?php

namespace RestfulException;

use Throwable;

class MethodNotAllowException extends AbstractException
{
    protected $httpCode = 405;

    public function __construct(string $message = '请求不支持', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}