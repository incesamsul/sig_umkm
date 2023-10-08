<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = 'umkm';
    protected $guarded = [''];

    public function lokasi()
    {
        return $this->hasOne(LokasiUmkm::class, 'umkm_id',  'id');
    }
}
