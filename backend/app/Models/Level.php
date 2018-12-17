<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model {
    protected $table = 'level';

    public $fillable = [
        'name', 'number'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $timestamps = true;

    public function sentences() {
        return $this->hasMany('App\Models\Sentence', 'id_level', 'id');
    }

    public function kanjis() {
        return $this->hasMany('App\Models\Kanji', 'id_level', 'id');
    }
}
