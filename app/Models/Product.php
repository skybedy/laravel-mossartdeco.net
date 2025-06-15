<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products p ORDER BY id ASC";

        return DB::select($sql);
    }
}
