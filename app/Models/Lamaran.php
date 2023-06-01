<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function getStatusAttribute($value)
    // {
    //     if ($value === 'aktif') {
    //         return 'Lamaran Terkirim';
    //     } elseif ($value === 'non-aktif') {
    //         return 'Ditolak';
    //     } elseif ($value === 'pending') {
    //         return 'Dalam Review';
    //     }
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }
}
