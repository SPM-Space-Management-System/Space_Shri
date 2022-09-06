<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    // protected $table = 'jobs';
    // protected $primarykey = 'id';
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
