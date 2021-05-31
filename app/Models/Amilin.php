<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amilin extends Model
{
 	public function muzaqis()
 	{
 		return $this->hasMany(Muzaqi::class);
 	}  
}
