<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pekerjaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lamaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pekerjaan_id',
        'username',
        'email',
        'pesan',
        'status',
        'cv_path',
        'surat_lamaran_path',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function pekerjaans()
    {
        return $this->belongsTo(Pekerjaan::class);
    }
    
    
}
