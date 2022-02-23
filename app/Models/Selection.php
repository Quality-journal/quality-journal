<?php

namespace App\Models;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Selection extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }


}
