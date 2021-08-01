<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['title' , 'price' , 'about' , 'keyword'];

    public static function firstWhere(string $string, $id)
    {
    }

    public static function paginate(int $int)
    {
    }
}

