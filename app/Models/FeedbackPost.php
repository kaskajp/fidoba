<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'upvotes',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
