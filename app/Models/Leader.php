<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rationalization',
        'photo',
        'count',
    ];

    public function User()
    {
        return $this->hasMany(User::class, 'leader_id');
    }
}
