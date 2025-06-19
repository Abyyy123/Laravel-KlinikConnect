<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'doctor_id',
        'appointment_time',
        'notes',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'appointment_time' => 'datetime', // Otomatis mengonversi ke objek DateTime PHP
    ];

    /**
     * Get the user (patient) that owns the appointment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the doctor that the appointment is with.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
