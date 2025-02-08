<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Status extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];
    protected $fillable = [
        'name',
        'for',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
