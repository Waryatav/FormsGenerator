<?php

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 01.10.2016
 * Time: 11:30
 */
class Debug
{

    public static function prn($content)
    {
        echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
        print_r($content);
        echo '</pre>';
    }

}