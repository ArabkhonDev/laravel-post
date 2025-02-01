<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Pivot
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'short_content',
        'body',
        'photo'
    ];

    // userga postlar boglanganligi  bolgani uchun, belongsto ishlatamiz
    public function user(){
        return $this->belongsTo(User::class,);
    }
    
    // categoryda postlar  kop boglanganligi  bolgani uchun, belongsto ishlatamiz
    public function category(){
        return $this->belongsTo(Category::class,);
    }

    // postlarga comment boglanganligi uchun va kopligidan  hasmany ishlatiladi. 
    public function comments(){
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }


}
