<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Language extends Model {
    protected $table = 'language';

    public $fillable = [
        'code', 'name'
    ];
}
