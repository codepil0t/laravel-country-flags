<?php

if (!function_exists('flag_url')) {
    function flag_url($code, $ratio = '4x3') {
        return asset("flags/{$ratio}/{$code}.svg");
    }
}
