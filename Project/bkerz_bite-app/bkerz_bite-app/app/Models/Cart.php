<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'session_id'
    ];
  
   
  
    // Thiết lập quan hệ với bảng CartDetail
    public function cartItems()
    {
        return $this->hasMany(CartDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
