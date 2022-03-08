<?php

namespace RestfulException;

use Throwable;

class ConflictException extends ValidateException
{
    protected $httpCode = 409;

    public function __construct(string $message = '资源未找到', $description = '资源冲突', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
