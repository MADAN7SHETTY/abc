<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopmodel extends Model
{
    use HasFactory;
    public $table="register";
    public $timestamp=false;
    protected $fieldset=['name','email','password'];
}
