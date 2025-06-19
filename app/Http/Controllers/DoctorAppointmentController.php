<?php

namespace App\Http\Controllers;

use App\Models\Doctor; 
use App\Models\Appointment; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class DoctorAppointmentController extends Controller
{
    /**
     * Menampilkan formulir pendaftaran janji temu dengan daftar dokter.
     */
    public function index()
    {
        $doctors = Doctor::where('is_active', true)->get();

        return view('doctor.appointment', compact('doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => ['required', 'exists:doctors,id'], // ID dokter harus ada di tabel doctors
            'appointment_date' => ['required', 'date', 'after_or_equal:today'], // Tanggal harus valid dan tidak di masa lalu
            'appointment_time' => ['required', 'date_format:H:i'], // Format waktu HH:MM
            'notes' => ['nullable', 'string', 'max:500'], // Catatan opsional, maksimal 500 karakter
        ],
        [
            'doctor_id.required' => 'Pilih dokter yang ingin Anda temui.',
            'doctor_id.exists' => 'Dokter yang Anda pilih tidak valid.',
            'appointment_date.required' => 'Tanggal janji temu wajib diisi.',
            'appointment_date.date' => 'Format tanggal tidak valid.',
            'appointment_date.after_or_equal' => 'Tanggal janji temu tidak boleh di masa lalu.',
            'appointment_time.required' => 'Waktu janji temu wajib diisi.',
            'appointment_time.date_format' => 'Format waktu tidak valid (HH:MM).',
            'notes.max' => 'Catatan tidak boleh lebih dari 500 karakter.',
        ]);

        $appointmentDateTime = $request->appointment_date . ' ' . $request->appointment_time;


        Appointment::create([
            'user_id' => Auth::id(), 
            'doctor_id' => $request->doctor_id,
            'appointment_time' => $appointmentDateTime,
            'notes' => $request->notes,
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard')->with('success', 'Janji temu Anda telah berhasil diajukan! Silakan tunggu konfirmasi dari Klinik XYZ.');
    }
    public function history()
    {
        $appointments = Auth::user()->appointments()->with('doctor')->latest()->get();

        return view('doctor.appointment-history', compact('appointments'));
    }
}