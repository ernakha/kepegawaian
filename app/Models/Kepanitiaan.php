<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepanitiaan extends Model
{
    use HasFactory;
    protected $table = 'kepanitiaans';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function details()
    {
        return $this->hasMany(Anggota::class, 'id_anggota', 'id');
    }
}
