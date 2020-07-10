<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\ContactCreate;
use App\Events\ContactDelete;
class Contact extends Model
{
	protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'job_title'       
    ];

    protected $dispatchesEvents = [
    	'saved' => ContactCreate::class,
    	'delete' => ContactDelete::class,
    	/*'update' => 'App\Events\ContactUpdate'::class,*/


    ];
}
