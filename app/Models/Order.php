<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','shipping_id','total','shipping_cost','status'] ;

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id')->select('id','first_name','last_name','email','phone','address');
    }
    public function shipping(){

        return $this->belongsTo(Shipping::class,'shipping_id')->select('id','first_name','last_name','phone','address');

    }
    public function order_items(){
        return $this->hasMany(OrderInfo::class,'order_id')->select('id','order_id','product_id','product_name','product_price','product_qty');
    }
    public function payment(){
        return $this->belongsTo(Payment::class,'id','order_id')->select('id','order_id','payment_type','status');
    }
}

