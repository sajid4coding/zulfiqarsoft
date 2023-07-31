<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function relationshipwithServiceCategory(){
        return $this->hasOne(ServiceCategory::class, 'id', 'portfolio_category_id');
    }
}
