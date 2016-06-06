<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;
use DB;

class Article extends Model {

    /**
     * Generated
     */

    protected $table = 'articles';
    protected $fillable = ['id', 'state', 'category_id'];


    public function contain_article()
    {
        return $this->hasMany(ContainArticle::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function media()
    {
//        return $this->belongsToMany(Media::class);
        return $this->belongsToMany(Media::class);
    }

    public function languages()
    {
        return Language::whereIn('id', DB::table('languages')->leftJoin('contain_articles', 'languages.id', '=', 'contain_articles.language_id')->select('languages.id')->where('contain_articles.article_id', '=', $this->id)->get());
    }


    public function scopeThumbnail($query)
    {
        return $this->media;
    }





    public function getDataAttribute()
    {

//        foreach($this->contain_article as $value)
//        {
//            $tab[] = $value->title;
//        }
//        return $tab;
        return $this->contain_article;
    }

    public function getTitleAttribute()
    {
        return $this->contain_article->first()->title;
    }

    public function getSubtitleAttribute()
    {
        return $this->contain_article->first()->subtitle;
    }

    public function getDescriptionAttribute()
    {
        return $this->contain_article->first()->description;
    }

    public function getLanguageAttribute()
    {
        return $this->contain_article->first()->language_id;
    }




}
