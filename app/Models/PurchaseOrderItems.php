<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderItems extends Model
{
        protected $fillable = [
           'purchase_order_id',
           'product_code',
           'quantity',
           'delivery_date',
           'total_value',
           'status'
        ];

        public function supplies(){
            return $this->hasMany(\App\Models\PurchaseOrder::class);
        }
}
