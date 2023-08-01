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
    // Định nghĩa mối quan hệ belongsTo với bảng Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
