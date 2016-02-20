<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment',
    ];

    /**
     * Get the articlefor this comment.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
