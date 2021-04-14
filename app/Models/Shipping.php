<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','phone','address'] ;

    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }
}
