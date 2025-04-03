<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'business_name',
        'address',
        'country', 
        'vat_number', 
        'logistics_name', 
        'logistics_email', 
        'logistics_contact' 
    ];

    public function purchaseOrder(){
        return $this->hasMany(\App\Models\PurchaseOrder::class);
    }
}
