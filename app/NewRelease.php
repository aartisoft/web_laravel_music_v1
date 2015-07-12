<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NewRelease extends Model {
    protected $table = 'newreleases';
    protected $fillable = ['name','image'];

}
