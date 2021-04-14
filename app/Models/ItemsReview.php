<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsReview extends Model
{
    use HasFactory;
    protected $fillable = ["customer_id","product_id","rating","message","status"];
}
