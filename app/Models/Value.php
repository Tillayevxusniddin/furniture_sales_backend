<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name'
    ];

    public $translatable = ['name'];

    public function valueable()
    {
        return $this->morphTo();
    }
}
