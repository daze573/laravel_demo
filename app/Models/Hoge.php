<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoge extends Model
{
    use HasFactory;
    
    public function getOrderBy()
    {
        return $this->orderBy('updated_at', 'DESC')->get();
    }
}
