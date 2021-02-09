<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Selection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Issue extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function selection()
    {
        return $this->belongsTo(Selection::class);
    }

    public function url(){
        return '/issue/'.$this->selection->slug.'/'.$this->slug;
    }
}
