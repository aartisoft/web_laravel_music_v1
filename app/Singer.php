<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model {
    protected $table = 'singers';
    protected $fillable = ['name','image'];

}
