<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsReview extends Model
{
    use HasFactory;
    protected $fillable = ["customer_id","product_id","rating","message","status"];
    public function customer(){
       return $this->belongsTo(Customer::class)->select('id','first_name','last_name');
    }
    public function getRatingAttribute($value)
    {
        return $value * 20;
    }
}
