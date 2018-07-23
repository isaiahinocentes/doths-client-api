<?php

namespace App\Models;

use App\BaseModel;

class Result extends BaseModel
{
    protected $fillable = [
        'userId',
        'moduleId',
        'duration'
    ];

    public function getInstance( $data ){
        return ( isset($data['id']) )?
            Result::find($data['id']):
            new Result();
    }
}
