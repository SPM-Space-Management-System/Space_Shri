<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobtitle',
        'P_date',
        'Summary',
        'Requirements',
        'image_id',
        'NOV',
        'C_date',
        'Duties',
        'Req_Doc',
        'done'
    ];
    
}


