<?php
namespace cgTag\Exceptions;

use cgTag\Strings\Strings;
use Exception;

/**
 * A general exception that includes a short label for any value.
 */
class ValueException extends cgTagException
{
    /**
     * Converts any value into a short descriptive label.
     *
     * @param $value
     * @return string
     */
    public static function describe($value): string
    {
        if (is_array($value)) {
            $value = '<array>';
        } elseif (is_object($value) || is_callable($value) || is_iterable($value)) {
            $value = sprintf('<%s>', get_class($value));
        } else {
            $value = (string)$value;
            if (strlen($value) > 30) {
                $value = substr($value, 0, -3) . '...';
            }
            $value = sprintf('"%s"', $value);
        }
        return $value;
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($value, $message = "", $code = 0, Exception $previous = null)
    {
        if ($message === '' || $message === null) {
            $message = "{value} value is not supported";
        }

        $message = Strings::replaceTokens($message, [
            'value' => static::describe($value)
        ]);

        parent::__construct($message, $code, $previous);
    }
}