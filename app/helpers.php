<?php
if (!function_exists('get_reading_time')) {
    function get_reading_time($text)
    {
        $totalReadTm = ceil(str_word_count($text) / 100);
        return $totalReadTm;
    }
}
