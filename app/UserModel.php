<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model {

	//
    protected $table = 'user_models';
    protected $fillable = ['firstname', 'surname'];

}
