<?php

namespace App\Models;

use App\BaseModel;

class Module extends BaseModel
{
    protected $fillable = [
        'name',
        'is_correct'
    ];

    public function getInstance( $data ){
        return ( isset($data['id']) )?
            Module::find($data['id']):
            new Module();
    }
}
