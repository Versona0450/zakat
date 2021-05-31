<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';

    public function mustahiqs()
 	{
 		return $this->hasMany(Mustahiq::class);
 	}  
}
