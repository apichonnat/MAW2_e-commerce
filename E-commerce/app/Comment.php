<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    /**
     * Generated
     */

    protected $fillable = ['id', 'comment', 'user_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }


}
