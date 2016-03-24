<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    /**
     * Generated
     */

    protected $table = 'articles';
    protected $fillable = ['id', 'state', 'category_id'];



}
