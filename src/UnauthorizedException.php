<?php

namespace RestfulException;

use Throwable;

class UnauthorizedException extends AbstractException
{
    protected $httpCode = 401;

    public function __construct(string $message = '未授权', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}