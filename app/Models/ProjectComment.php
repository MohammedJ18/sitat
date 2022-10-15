<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{
    use HasFactory;

    protected $fillable=['project_id', 'user_id', 'content'];

    public function service(){

        return $this->belongsTo(Services::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
