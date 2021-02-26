<?php

namespace RestfulException;

use Throwable;

class DbException extends AbstractException
{
    protected $httpCode = 500;

    public function __construct(string $message = '服务器内部错误', $description = '数据库执行失败', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $description, $code, $previous);
    }
}