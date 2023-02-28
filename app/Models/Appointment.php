<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $guarded = [];
    // public $fillable = ['name', 'date', 'time', 'email', 'phone', 'location', 'eventTxt', 'user_id'];

    /**
     * Get the user that owns the appointment.
     */
    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
