<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muzaqi extends Model
{

    protected $guarded = [];

    public function amilin()
    {
    	return $this->belongsTo(Amilin::class);
    }


}
