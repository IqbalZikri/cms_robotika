<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'judul',
        'slug',
        'ringkasan_berita',
        'isi_berita',
        'gambar',
        'status',
        'views',
        'published_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'published_at' => 'datetime'
    ];
}
