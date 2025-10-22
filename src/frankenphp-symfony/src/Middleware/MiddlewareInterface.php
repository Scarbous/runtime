<?php

declare(strict_types=1);

namespace Runtime\FrankenPhpSymfony\Middleware;

interface MiddlewareInterface
{
    function wrap(callable $handler, array $server): void;
}
