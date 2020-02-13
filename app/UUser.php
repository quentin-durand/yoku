<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UUser extends Model
{
    protected $table = 'u_user';


    public $timestamps = false;

    protected $fillable = [
        'U_LastName', 'U_FirstName', 'U_Age','U_Phone','U_Address','U_ZipCode','U_City','U_Mail','U_GoogleId','U_Login','U_Password',
    ];
}
