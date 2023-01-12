<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['nisn', 'jk', 'nama', 'sekolah', 'email', 'no_hp', 'no_hp_ayah', 'no_hp_ibu', 'referensi'];
}
