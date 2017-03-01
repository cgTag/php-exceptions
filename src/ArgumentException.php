<?php
namespace cgTag\Exceptions;

use cgTag\Strings\Strings;
use Exception;

class ArgumentException extends cgTagException
{
    /**
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }


    /**
     * @return array
     */
    public function getCallerTrace(): array
    {
        foreach ($this->getTrace() as $trace) {
            $func = $trace['function'];
            $class = $trace['class'];
            $args = $trace['args'];

            if (Strings::startsWith($class, 'cgTag\Exceptions')) {
                continue;
            }
        }
    }
}
