<?php

if (!function_exists('on_Page')) {
    function on_Page($path)
    {
        return request()->is($path);
    }
}


if (!function_exists('return_if')) {
    function return_if($condition, $value)
    {
        if ($condition){
            return $value;
        }
    }
}
