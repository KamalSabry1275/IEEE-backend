<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopefilter($query){
        $query->when(request("search"),function($query){
            return $query->where("name","like","%".request("search")."%");
        });
    }

    public function invoices(){
        return $this->hasMany(Invoice::class,"customer_id");
    }
}
