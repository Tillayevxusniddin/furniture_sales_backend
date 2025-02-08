<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Attribute extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name',
    ];

    public $translatable = ['name'];

    public function values()
    {
        return $this->morphMany(Value::class, 'valueable');
    }
}
