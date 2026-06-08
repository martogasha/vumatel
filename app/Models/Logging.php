<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{
    use HasFactory;
        protected $fillable = [
        'date',
        'reason',
        'user_id',
        'amount',
        'status',
        'name',
        

    ];
    public function user(){
       return $this->belongsTo(User::class);
    }
}
