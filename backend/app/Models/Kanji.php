<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kanji extends Model {
    protected $table = 'kanji';

    public $fillable = [
        'kanji', 'kname', 'kstroke', 'grade', 'meaning', 'kunyomi', 'onyomi', 'examples', 'id_level'
    ];

    public function getExamplesAttribute($value) {
        return json_decode($value);
    }

    public function level() {
        return $this->belongsTo('App\Models\Level', 'id', 'id_level');
    }
}
