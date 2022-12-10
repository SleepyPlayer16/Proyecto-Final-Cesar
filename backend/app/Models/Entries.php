<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'status',
        'image'
    ];
    public function Entradas(){
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
    public function categories(){
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
