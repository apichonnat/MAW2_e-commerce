<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medium extends Model {

    /**
     * Generated
     */

    protected $table = 'media';
    protected $fillable = ['id', 'name', 'path', 'description', 'type_media_id'];



}
