<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    use HasFactory;
    protected $table = "child";
    protected $primarykey = "childid";
    // protected $fillable=[
    //     'ChildFirstName',
    //     'ChildMiddleName',
    //     'ChildLastName',
    //     'ChildAge',
    //     'ChildGender',
    //     'ChildAddress',
    //     'ChildCity',
    //     'ChildState',
    //     'ChildCountry',
    //     'ChildZipCode'
    // ];

}
