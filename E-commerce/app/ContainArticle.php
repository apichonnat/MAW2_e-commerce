<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContainArticle extends Model {

    /**
     * Generated
     */

    protected $table = 'contain_articles';
    protected $fillable = ['id', 'title', 'subtitle', 'description', 'language_id', 'article_id'];



}
