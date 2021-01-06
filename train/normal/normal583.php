<?php
function readTransform($value, $type)
    {
        if (is_null($value)) {
            return;
        }

        switch ($type) {
            case 'integer':
                $value = (int) $value;
                break;
            case 'float':
                if (empty($param)) {
                    $value = (float) $value;
                } else {
                    $value = (float) number_format($value, $param, '.', '');
                }
                break;
            case 'object':
                $value = empty($value) ? new \stdClass() : json_decode($value);
                break;
            case 'serialize':
                try {
                    $value = unserialize($value);
                } catch (\Exception $e) {
                    $value = null;
                }
                break;
            default:
                if (false !== strpos($type, '\\')) {
                    // 对象类型
                    $value = new $type($value);
                }
        }

        return $value;
    }
?>