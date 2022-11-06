<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'topic',
        'author',
        'date',
        'country',
        'description',
        'image_id',
        'done'

    ];

    public function images()
    {

        return $this->hasOne(Image::class, 'id', 'image_id');
    }
    public function allActive() {
        return $this->where('done', 1)->get();
    }
}
