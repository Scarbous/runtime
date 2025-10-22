<?php

namespace Runtime\FrankenPhpSymfony\Exception;

use Throwable;

class InvalidMiddlewareException extends \Exception
{
    function __construct(
        public string $className,
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct(
            "The middleware class '$className' is invalid.",
            $code,
            $previous
        );
    }
}
