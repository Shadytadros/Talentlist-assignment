<?php

namespace Modules\ContactUs\Entities;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
    ];
}
