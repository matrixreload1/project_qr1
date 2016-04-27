<?php

namespace Ctrlasis;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";

    protected $fillable = ['name', 'phone', 'address', 'website', 'emailcontact'];
}
