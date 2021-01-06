<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

class ArrayParser
{
    /**
     * @var string Character used in array
     */
    private $delimiter = ',';



    /**
     * Pares PgSQL array encoded in string
     *
     * @param string $value
     * @param int $i parse starting position
     * @return array
     */
    public function parseArray($value, &$i = 0)
    {
        $result = [];
        $len = strlen($value);
        for (++$i; $i < $len; ++$i) {
            switch ($value[$i]) {
                case '{':
                    $result[] = $this->parseArray($value, $i);
                    break;
                case '}':
                    break 2;
                case $this->delimiter:
                    if (empty($result)) { // `{}` case
                        $result[] = null;
                    }
                    if (in_array($value[$i + 1], [$this->delimiter, '}'], true)) { // `{,}` case
                        $result[] = null;
                    }
                    break;
                default:
                    $result[] = $this->parseString($value, $i);
            }
        }

        return $result;
    }
}
?>
