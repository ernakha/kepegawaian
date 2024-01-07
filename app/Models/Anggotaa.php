<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggotaa extends Model
{
    use HasFactory;
    protected $table = 'anggotaas';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
