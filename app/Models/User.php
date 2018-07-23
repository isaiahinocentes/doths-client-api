<?php

namespace App\Models;

use App\BaseModel;

class User extends BaseModel
{

    protected $fillable = [
        'firstName',
        'lastName'
    ];

    public function getInstance( $data ){
        return ( isset($data['id']) )?
            User::find($data['id']):
            new User();
    }
}
