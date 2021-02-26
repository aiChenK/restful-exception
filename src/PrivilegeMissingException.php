<?php

namespace RestfulException;

use Throwable;

class PrivilegeMissingException extends AbstractException
{
    protected $httpCode = 403;

    public function __construct(string $message = '无权限', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}