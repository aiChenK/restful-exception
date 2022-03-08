<?php

namespace RestfulException;

use Throwable;

class ValidateException extends ClientException
{
    protected $httpCode = 400;

    public function __construct(string $message = '验证失败', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
