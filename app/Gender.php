<?php

namespace Hms;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'genders';


//    /**
//     * Get the gender that belongs to the user detail
//     *
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function userDetail()
//    {
//        return $this->belongsTo('Hms\UserDetail');
//    }
}
