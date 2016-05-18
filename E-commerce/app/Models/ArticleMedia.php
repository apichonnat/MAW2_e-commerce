<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleMedia extends Model {

    /**
     * Generated
     */

    protected $table = 'article_media';
    protected $fillable = ['id', 'media_id', 'article_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }


    public $timestamps = false;
}
