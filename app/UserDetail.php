<?php

namespace Hms;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'gender', 'marital_status', 'birthday', 'phone', 'address', 'summary',
    ];

    /**
     * Get the user associated with the details
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Hms\User');
    }
}
