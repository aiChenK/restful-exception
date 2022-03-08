<?php

namespace RestfulException;

use Throwable;

class ClientException extends AbstractException
{
    protected $httpCode = 400;

    public function __construct(string $message = '客户端错误', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
