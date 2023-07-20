<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'comment',
        'news_id'
    ];
    function news() {
        return $this->belongsTo(News::class);
    }
}
