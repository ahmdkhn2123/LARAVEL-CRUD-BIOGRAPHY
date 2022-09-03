<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\bioC;

class bioM extends Model
{
    protected $table='details';
    protected $fillable = ['name','age','cnic','city'];

}
