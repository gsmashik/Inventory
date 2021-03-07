<?php

namespace Olee\Inventory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrderRow extends Model
{
    use HasFactory;
    protected $guarded = [ "_token" ];
    protected $table = "rdr1";
}