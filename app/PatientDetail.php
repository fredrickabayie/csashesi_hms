<?php

namespace Hms;

use Illuminate\Database\Eloquent\Model;

class PatientDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patients_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'gender', 'marital_status', 'birthday', 'phone', 'address',
    ];

    /**
     * Get the patient associated with the details
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('Hms\Patient');
    }

    /**
     * Get the gender associated with the detail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gender()
    {
        return $this->hasOne('Hms\Gender', 'gender_id');
    }

    /**
     * Get the gender associated with the detail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maritalStatus()
    {
        return $this->hasOne('Hms\MaritalStatus', 'status_id');
    }
}
