<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContainArticle extends Model {

    /**
     * Generated
     */

    protected $table = 'contain_articles';
    protected $fillable = ['id', 'title', 'subtitle', 'description', 'language_id', 'article_id'];

    public function language()
    {
        return $this->belongsTo(Language::class);
        //retour une relation
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }



}
