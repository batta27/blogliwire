<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'name','description'
    ];

    //? Many-to-Many
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
