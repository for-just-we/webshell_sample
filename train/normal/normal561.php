<?php
function writeTransform($value, $type)
    {
        if (is_null($value)) {
            return;
        }

        
        list($type, $param) = explode(':', $type, 2);
       
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
            case 'datetime':
                $format = !empty($param) ? $param : $this->dateFormat;
                $value  = is_numeric($value) ? $value : strtotime($value);
                $value  = $this->formatDateTime($value, $format);
                break;
   
            case 'json':
                $option = !empty($param) ? (int) $param : JSON_UNESCAPED_UNICODE;
                $value  = json_encode($value, $option);
                break;
            case 'serialize':
                $value = serialize($value);
                break;
        }

        return $value;
    }
?>