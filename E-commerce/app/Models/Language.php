<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model {

    /**
     * Generated
     */

    protected $fillable = ['id', 'name', 'acronym'];

    public function contain_articles()
    {
        return $this->hasMany(ContainArticle::class);

    }


}


//
//$l = new Language;
//$l->language = "french";
//$l->users[0]->firstname;
//
//$u = new User;
//
//$l->users()->createMany([$u, $u1]);//affect une langue a un ou plusieur user
//
//$u->language()->associate($l);