<?php

namespace RestfulException;

use Throwable;

class RouteNotFoundException extends AbstractException
{
    protected $httpCode = 404;

    public function __construct(string $message = '路由未找到', $description = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}
