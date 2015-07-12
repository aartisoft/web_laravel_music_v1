<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {
    protected $table = 'subcategories';
    protected $fillable = ['cat_id', 'sub_category_name', 'image'];

}
