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
            case 'boolean':
                $value = (bool) $value;
                break;
        }

        return $value;
    }
?>