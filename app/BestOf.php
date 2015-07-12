<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BestOf extends Model {
    protected $table = 'bestof';
    protected $fillable = ['name','image'];
}
