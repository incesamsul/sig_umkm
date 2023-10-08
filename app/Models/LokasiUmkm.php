<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiUmkm extends Model
{
    use HasFactory;

    protected $table = 'lokasi_umkm';
    protected $guarded = [''];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id', 'id');
    }
}
