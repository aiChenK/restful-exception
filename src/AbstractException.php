<?php

namespace RestfulException;

use Throwable;

abstract class AbstractException extends \Exception
{
    protected $httpCode = 200;
    protected $description;

    public function __construct(string $message, $description, $code = 0, Throwable $previous = null)
    {
        $this->description = $description;
        parent::__construct($message, $code, $previous);
    }

    final public function getHttpCode(): int
    {
        return $this->httpCode;
    }

    final public function getDescription()
    {
        return $this->description;
    }

}