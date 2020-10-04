<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'body',
        'image'
    ];

    /**
     * Get the category
     */
    public function getCategory(){
        return $this->hasOne(Category::class);
    }
}
