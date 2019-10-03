<?php
if (!function_exists('convert_to_default_date_format')) {
    function convert_to_default_date_format($string)
    {
        $strings = explode('/', $string);
        $result  = $strings[2] . '-' . $strings[1] . '-' . $strings[0];

        return $result;
    }
}

if (!function_exists('convert_to_my_date_format')) {
    function convert_to_my_date_format($string)
    {
        $strings = explode('-', $string);
        $result  = $strings[2] . '/' . $strings[1] . '/' . $strings[0];

        return $result;
    }
}

if (!function_exists('convert_vi_to_en')) {
    function convert_vi_to_en($string)
    {
        $normalizeChars = array(
            'a' => 'a', 'á' => 'a', 'à' => 'a', 'ả' => 'a', 'ã' => 'a', 'ạ' => 'a',
            'ă' => 'a', 'ắ' => 'a', 'ằ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ặ' => 'a',
            'â' => 'a', 'ấ' => 'a', 'ầ' => 'a', 'ẩ' => 'a', 'ẫ' => 'a', 'ậ' => 'a',
            'd' => 'd', 'đ' => 'd',
            'e' => 'e', 'é' => 'e', 'è' => 'e', 'ẻ' => 'e', 'ẽ' => 'e', 'ẹ' => 'e',
            'ê' => 'e', 'ế' => 'e', 'ề' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ệ' => 'e',
            'i' => 'i', 'í' => 'i', 'ì' => 'i', 'ỉ' => 'i', 'ĩ' => 'i', 'ị' => 'i',
            'o' => 'o', 'ó' => 'o', 'ò' => 'o', 'ỏ' => 'o', 'õ' => 'o', 'ọ' => 'o',
            'ô' => 'o', 'ố' => 'o', 'ồ' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ộ' => 'o',
            'ơ' => 'o', 'ớ' => 'o', 'ờ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ợ' => 'o',
            'u' => 'u', 'ú' => 'u', 'ù' => 'u', 'ủ' => 'u', 'ũ' => 'u', 'ụ' => 'u',
            'ư' => 'u', 'ứ' => 'u', 'ừ' => 'u', 'ử' => 'u', 'ữ' => 'u', 'ự' => 'u',
            'y' => 'y', 'ý' => 'y', 'ỳ' => 'y', 'ỷ' => 'y', 'ỹ' => 'y', 'ỵ' => 'y',
        );
        return strtr($str, $normalizeChars);
    }
}

if (!function_exists('remove_special_characters')) {
    function remove_special_characters($string)
    {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}

if (!function_exists('random_pic')) {
    function random_pic($dir = 'public/storage')
    {
        $files = glob($dir . '/*.*');
        $file  = array_rand($files);
        
        return $files[$file];
    }
}
