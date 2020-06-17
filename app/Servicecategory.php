<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicecategory extends Model
{
    //
    protected $table="_servicecatagorys";
    protected $fillable=['service_name','service_description','status'];
}
