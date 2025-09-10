<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'recipts';
    protected $fillable = 'foto';
    //tidak ditulis karena laravel otomatis tau kalo pk adalah id protected $primarykey = 'id';
}
