<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'corporate_name',
        'fantasy_name',
        'cnpj',
    ];

    protected $hidden = [
        'enable'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
