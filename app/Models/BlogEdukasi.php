<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogEdukasi extends Model
{
    use HasFactory;
    protected $table = 'blog_edukasi';
    protected $fillable = ['author', 'judul_blog', 'isi_blog', 'img'];

    public function user(){
    return $this->belongsTo(User::class, 'author');
    }
}
