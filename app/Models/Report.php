<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'judul', 'deskripsi'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
