<?php

namespace Hms;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];
}
