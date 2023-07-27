<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'phones';
    protected $fillable = ['id', 'name', 'description', 'price', 'date_of_birth', 'image', 'category_id'];
}
