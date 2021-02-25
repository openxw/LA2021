<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'user_roles', 'intro', 'details', 'start_at', 'end_at', 'location', 'fee', 'involves', 'involves_min', 'involves_max', 'status', 'organizers', 'views', 'collectors_num', 'is_stick', 'image', 'updated_at', 'created_at',
    ];
}
