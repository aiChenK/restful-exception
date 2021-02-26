<?php

namespace RestfulException;

use Throwable;

class InvalidArgumentException extends AbstractException
{
    protected $httpCode = 400;

    public function __construct(string $message = '参数验证失败', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}