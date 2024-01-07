<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subtitle', 'body'
    ];

       //? Many-To-One
       public function user(): BelongsTo
       {
           return $this->belongsTo(User::class);
       }
       
    //? Many-to-Many
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    
}
