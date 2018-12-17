<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sentence extends Model {
    protected $table = 'sentence';

    public $fillable = [
        'tatoeba_id', 'sentence', 'id_level', 'id_language'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    public $timestamps = true;

    public function getKanjiAttribute($value) {
        return json_decode($value);
    }

    public function getFuriganaAttribute($value) {
        return json_decode($value);
    }

    public function level() {
        return $this->belongsTo('App\Models\Level', 'id', 'id_level');
    }

    public function language() {
        return $this->belongsTo('App\Models\Lang', 'id', 'id_language');
    }

    public function translations () {
        return $this->belongsToMany('App\Models\Sentence', 'sentence2sentence', 'sentence', 'translation');
    }
}
