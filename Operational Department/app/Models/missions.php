<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class missions extends Model
{
    use HasFactory;
    protected $table = 'missions';
    protected $primaryKey = 'mission_id';
    protected $fillable = ['topic', 'description', 'pub_date','mission_image'];

}
