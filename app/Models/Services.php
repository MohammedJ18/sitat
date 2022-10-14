<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'content', 'points', 'puichase_times'];

    public function images()
    {
        return $this->hasMany(ServiceImages::class);
    }

   // public function opinion() {    return $this->hasMany(ServiceOpinion::class); }

    public function users()
    {
        return $this->belongsToMany(User::class, 'service_users');
    }
}
