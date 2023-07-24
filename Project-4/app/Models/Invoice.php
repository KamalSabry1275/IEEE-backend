<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopefilter($query){
        $query->when(request("status"),function($query){
            return $query->where(["status" => request("status")[0]]);
        });
    }

}