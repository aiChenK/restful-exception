<?php

namespace RestfulException;

use Throwable;

class NotLoginException extends UnauthorizedException
{
    protected $httpCode = 401;

    public function __construct(string $message = '未登录', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
