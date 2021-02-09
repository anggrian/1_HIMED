<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    public $primaryKey = 'id';
    protected $fillable = [
        'title_about', 'description_about', 'img_about'
    ];
}
