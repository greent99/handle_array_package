<?php

namespace Greent\HandleArray;

class ArrayHelper
{
    /**
     * @param $array
     * @param $key
     * @return mixed|null
     */
    public static function get($array, $key)
    {
        if (is_null($key)) {
            return $array;
        }

        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        return null;
    }

    /**
     * @param $array
     * @param $key
     * @param $value
     * @return mixed
     */
    public static function set(&$array, $key, $value)
    {
        if (is_null($key)) {
            return $array;
        }

        if (array_key_exists($key, $array)) {
            $array[$key] = $value;
        }

        return $array;
    }

    /**
     * @param array $arr
     * @param $key
     * @param $value
     * @return array
     */
    public static function add(array $arr, $key, $value)
    {
        if (is_null(static::get($arr, $key))) {
            static::set($arr, $key, $value);
        }

        return $arr;
    }
}