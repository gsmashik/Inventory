<?php

namespace Olee\Inventory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyReceipt extends Model
{
    use HasFactory;
    protected $guarded = [ "_token" ];
    protected $table = "money_receipts";
}
