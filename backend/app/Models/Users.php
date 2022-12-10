<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'name',
        'surname',
        'email',
        'password',
        'image'
    ];

    public function entries(){
        return $this->hasMany(Entries::class, 'user_id', 'id');
    }
    //public function citas(){
   //     return $this->hasMany(Cita::class,'id_usuario','id');
   // }
}
