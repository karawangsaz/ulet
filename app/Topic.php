<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'published', 'urutan',
        'id_seri', 'author', 'judul', 'thumbnail', 'url_video', 'deskripsi'
    ];
}
