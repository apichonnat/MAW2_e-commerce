<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function scopeThumbnail($query)
    {
        return $this->media;
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




}
