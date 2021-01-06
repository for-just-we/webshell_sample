<?php

/**
 * The class converts PostgreSQL array representation to PHP array
 *
 * @author Sergei Tigrov <rrr-r@ya.ru>
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 * @since 2.0.14
 */
class ArrayParser
{
    private $delimiter = ',';


    /**
     * Parses PgSQL encoded string
     *
     * @param string $value
     * @param int $i parse starting position
     * @return null|string
     */
    private function parseString($value, &$i)
    {
        $isQuoted = $value[$i] === '"';
        $stringEndChars = $isQuoted ? ['"'] : [$this->delimiter, '}'];
        $result = '';
        $len = strlen($value);
        for ($i += $isQuoted ? 1 : 0; $i < $len; ++$i) {
            if (in_array($value[$i], ['\\', '"'], true) && in_array($value[$i + 1], [$value[$i], '"'], true)) {
                ++$i;
            } elseif (in_array($value[$i], $stringEndChars, true)) {
                break;
            }

            $result .= $value[$i];
        }

        $i -= $isQuoted ? 0 : 1;

        if (!$isQuoted && $result === 'NULL') {
            $result = null;
        }

        return $result;
    }
}
?>
