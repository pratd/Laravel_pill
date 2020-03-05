<?php

namespace laravel_project;

use Illuminate\Database\Eloquent\Model;
use laravel_project\Http\Controllers\ArticlesController;

class TempUser extends Model
{
    protected $guarded =[];

    public function allarticles(){
        return $this->hasMany(Articles::class);
    }
}
