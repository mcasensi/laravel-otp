<?php

namespace justcode\Otp\Models;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'otp';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'token', 'validity'
    ];
}
