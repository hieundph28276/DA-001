<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'address',
        'house',
        'street',
        'district',
        'commune',
        'phone',
        'email',
        'status',
        'totalPrice',
        'noste',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
