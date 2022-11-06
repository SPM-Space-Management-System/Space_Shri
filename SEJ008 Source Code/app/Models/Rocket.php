<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rocket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country',
        'height',
        'stages',
        'date',
        'status',
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
