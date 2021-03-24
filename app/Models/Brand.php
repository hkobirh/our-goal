<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=['name','slug','status','create_by'];

    public function user(){
        return $this->belongsTo(User::class ,'create_by')->select('id','name');
    }
    public function products(){
        return $this->hasMany(Product::class ,'brand_id')->select('id','name','slug','category_id','brand_id','model','buying_price','selling_price','special_price','special_price_from','special_price_to','quantity','sku_code','color','size','title','thumbnail','image','warranty','warranty_duration','warranty_conditions','description','status','create_by','update_by')
            ->where('status','active');
    }
}
