<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'goal',
        'link',
        'image'
    ];

    public function Type(){
        return $this->belongsTo(Type::class);
    }
}
