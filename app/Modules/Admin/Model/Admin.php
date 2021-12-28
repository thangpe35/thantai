<?php

namespace App\Modules\Admin\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "admins";

    protected $fillable = ["name","img","nameprice"];
}
