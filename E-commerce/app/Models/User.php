<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */
    protected $fillable = ['id', 'first_name', 'last_name', 'card_number', 'mail', 'pseudo', 'password', 'address_delivery_id', 'address_id', 'language_id', 'validate', 'remember_token'];

    public function language()
    {
        return $this->belongsTo(Language::class);
        //retour une relation
    }

    public function addresse1()
    {
        return $this->belongsTo(Address::class);
    }

    public function address_delivery()
    {
        return $this->belongsTo(Address::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
