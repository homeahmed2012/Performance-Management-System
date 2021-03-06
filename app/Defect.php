<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defect extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','score'];

    /**
     * Users relationship
     */
    public function users()
    {
    	return $this->belongsToMany('App\User')->withPivot('id','defect_id','user_id')->withTimestamps();
    }
}
