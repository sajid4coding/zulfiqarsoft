<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    public function relationshipwithblog(){
        return $this->hasOne(blog::class, 'id', 'blogID');
    }
}
