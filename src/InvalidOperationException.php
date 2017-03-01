<?php
namespace cgTag\Exceptions;

use Exception;

class InvalidOperationException extends cgTagException
{
    /**
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = "invalid operation", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
