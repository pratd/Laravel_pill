<?php

namespace laravel_project;

use Illuminate\Database\Eloquent\Model;
use PDO;

class Articles extends Model
{
    protected $fillable =['title', 'content', 'publish', 'slug'];
    //the above data is mass assigned
    public function getPublishAttribute($attribute){
        return [
            0 => 'Draft',
            1 => 'Published'
        ][$attribute]; //using accessor
    }
    public function scopePublished($query){
        return $query->where('publish', '1');
    }

    public function scopeDraft($query){
        return $query->where('publish','0');
    }

    public function alluser(){
        return $this->belongsTo(TempUser::class);
    }
}
