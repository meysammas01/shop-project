<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
        // متد برای کاهش موجودی محصول
        public function reduceStock($quantity = 1)
        {
            if ($this->stock >= $quantity) {
                // کاهش موجودی محصول
                $this->stock -= $quantity;
                $this->save(); // ذخیره تغییرات در پایگاه داده
                return true; // موفقیت
            }
            return false; // اگر موجودی کافی نبود
        }
}
