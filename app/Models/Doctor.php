<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'specialization',
        'education',
        'experience_years',
        'bio',
        'gender',
        'sip_number',
        'phone_number',
        'email',
        'clinic_address',
        'city',
        'work_days',
        'work_hours',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean', // Pastikan is_active di-cast ke boolean
    ];

    /**
     * Get the appointments for the doctor.
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}