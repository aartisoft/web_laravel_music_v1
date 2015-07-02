<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {

	//
    protected $table = 'subcategories';
    protected $fillable = ['id', 'sub_category_name', 'image'];

}
