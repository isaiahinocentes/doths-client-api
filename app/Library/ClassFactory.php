<?php
/**
 * Created by PhpStorm.
 * User: isaia
 * Date: 23-Jul-18
 * Time: 11:15 PM
 */

namespace App\Library;


class ClassFactory
{
    public static function model( $model ){
        $model_name = "\\App\\Models\\$model";
        return new $model_name();
    }
}