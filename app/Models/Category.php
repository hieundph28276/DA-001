<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'category';
    protected $fillable = ['id','name'];
    // Định nghĩa mối quan hệ hasMany với bảng Phones
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
