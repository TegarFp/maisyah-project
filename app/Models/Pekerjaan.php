<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $table = 'pekerjaans';
    protected $fillable = [
        'image',
        'judul_pekerjaan',
        'pt_id',
        'status_pekerjaan',
        'start_salary',
        'end_salary',
        'expected_experience',
        'fungsi_kerja',
        'level',
        'lulusan',
        'deskripsi',
        'kualifikasi',
        'benefits',
        'about',
        'user_id',
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class);
    }

    // public function pekerjaan_user()
    // {
    //    return $this->hasMany(PekerjaanUser::class, 'pekerjaan_id', 'id');
    // }
    // public function user_id()
    // {
    //    return $this->hasMany(PekerjaanUser::class, 'pekerjaan_id', 'id');
    // }
}
