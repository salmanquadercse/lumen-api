<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'content'];

    /**
     * Get the posts for the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}