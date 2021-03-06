<?php

namespace Spatie\LaravelImageOptimizer\Exceptions;

use Exception;
use Psr\Log\LoggerInterface;
use Spatie\ImageOptimizer\Optimizer;

class InvalidConfiguration extends Exception
{
    public static function notAnOptimizer($class)
    {
        $optimizerInterface = Optimizer::class;

        return new static("Configured optimizer `{$class}` does not implement `{$optimizerInterface}`.");
    }

    public static function notAnLogger($class)
    {
        $loggerInterface = LoggerInterface::class;

        return new static("Configured optimizer `{$class}` does not implement `{$loggerInterface}`.");
    }
}
