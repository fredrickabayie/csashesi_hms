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

    /**
     * Get the detail associated with the patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patientDetail()
    {
        return $this->hasOne('Hms\PatientDetail');
    }
}
