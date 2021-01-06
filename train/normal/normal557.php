<?php
function writeTransform($value, $type)
    {
        if (is_null($value)) {
            return;
        }

        
        list($type, $param) = $type;
       

        switch ($type) {
            case 'integer':
                $value = (int) $value;
                break;
            case 'boolean':
                $value = (bool) $value;
                break;
            case 'timestamp':
                if (!is_numeric($value)) {
                    $value = strtotime($value);
                }
                break;
            case 'object':
                if (is_object($value)) {
                    $value = json_encode($value, JSON_FORCE_OBJECT);
                }
                break;
            case 'array':
                $value = (array) $value;
            case 'json':
                $option = !empty($param) ? (int) $param : JSON_UNESCAPED_UNICODE;
                $value  = json_encode($value, $option);
                break;
        }

        return $value;
    }
?>