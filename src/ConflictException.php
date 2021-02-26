<?php

namespace RestfulException;

use Throwable;

class ConflictException extends AbstractException
{
    protected $httpCode = 409;

    public function __construct(string $message = '资源冲突', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}