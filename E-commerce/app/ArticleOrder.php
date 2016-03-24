<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleOrder extends Model {

    /**
     * Generated
     */

    protected $table = 'article_orders';
    protected $fillable = ['id', 'order_id', 'article_id'];



}
