<?php

namespace App\Models;

use Barryvdh\Debugbar\Facades\Debugbar;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    use HasFactory;
    protected $dateFormat = 'd.m.Y';

    protected $fillable = [
        'title',
        'picture',
    ];
    
    public $timestamps = true;

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('d.m.Y');
    }
}
