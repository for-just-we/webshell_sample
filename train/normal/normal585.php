<?php
function readTransform($value, $type)
    {
        if (is_null($value)) {
            return;
        }

        switch ($type) {
            case 'timestamp':
                if (!is_null($value)) {
                    $format = !empty($param) ? $param : $this->dateFormat;
                    $value  = $this->formatDateTime($value, $format);
                }
                break;
            case 'datetime':
                if (!is_null($value)) {
                    $format = !empty($param) ? $param : $this->dateFormat;
                    $value  = $this->formatDateTime(strtotime($value), $format);
                }
                break;
            case 'json':
                $value = json_decode($value, true);
                break;
        }

        return $value;
    }
?>