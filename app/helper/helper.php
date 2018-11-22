<?php
if (!function_exists('get_auth_user')) {

    function get_auth_user()
    {
        return auth()->check() ? \Illuminate\Support\Facades\Auth::user() : null;
    }
}

if (!function_exists('array_value_convert')) {
    function array_value_convert($data, $search = null, $replace = 0)
    {
        return array_map(function($val) use($search, $replace) {
            if (is_array($val)) {
                return array_value_convert($val, $search, $replace);
            } else {
                if ($val == $search) {
                    return $replace;
                }
            }

            return $val;
        }, $data);
    }
}

if (!function_exists('is_selected')) {

    function is_selected($value1, $value2)
    {
        return $value1 === $value2;
    }
}

if (!function_exists('microtime_diff')) {

    function microtime_diff($start, $end = null)
    {

        if (!$end) {
            $end = microtime(true);
        }
        list($start_usec, $start_sec) = [($start - intval($start)), intval($start)];
        list($end_usec, $end_sec) = [($end - intval($end)), intval($end)];
        $diff_sec = intval($end_sec) - intval($start_sec);
        $diff_usec = floatval($end_usec) - floatval($start_usec);
        //dd(floatval($diff_sec) + $diff_usec);
        return round(floatval($diff_sec) + $diff_usec, 4);
    }
}