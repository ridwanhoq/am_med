<?php

namespace App\Models;

use App\Http\Components\Helpers\BengaliHelper;

class Setting
{



    /**
     * sfdsf
     */

    public static function array_list_by_element_index($staticfunction, $index = 'en')
    {
        // for religions
        // self::array_list_by_element_key('religions', 'en');
        $out_array = [];
        foreach (self::$staticfunction() as $key => $array) {
            $out_array[$key] = $array[$index];
        }
        return $out_array;
    }
}
