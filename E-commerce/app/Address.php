<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    /**
     * Generated
     */

    protected $fillable = ['id', 'street', 'nb_street', 'city', 'npa', 'country_id'];

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public $timestamps = false;
}
