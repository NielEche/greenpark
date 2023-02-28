<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attorneys extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_path',
        'name',
        'position',
        'bio',
        'twitter',
        'facebook',
        'linkedin',
        'instagram'
    ];
}
