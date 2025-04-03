<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = [
        'order_type',
        'supplier_id',
        'distributor_id'
    ];

    public function supplies(){
        return $this->hasMany(\App\Models\Supplier::class);
    }
    public function distributors(){
        return $this->hasMany(\App\Models\Destributor::class);
    }

    public function purchaseOrderItems(){
        return $this->hasMany(\App\Models\PurchaseOrderItems::class);
    }
}
