<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOpinion extends Model
{
    use HasFactory;

    protected $fillable=['service_id', 'user_id', 'content', 'stars'];

    public function service(){

        return $this->belongsTo(Services::class);
        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}