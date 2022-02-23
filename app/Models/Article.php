<?php

namespace App\Models;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function url(){
        return '/article/'.$this->slug;
    }
}
