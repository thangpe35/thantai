<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thantai extends Model
{
    use HasFactory;
    // protected $table = 'thantais';
    // protected $primary = 'id';
    // protected $fillable = ['name','address','telephonenumber','textarea'];
    protected $fillable = ['thantais'];
    
        
    public static function store($data){
        $thantai = new thantai;
        $thantai->name = $data['name'];
        $thantai->address = $data['address'];
        $thantai->telephonenumber = $data['telephonenumber'];
        $thantai->textarea = $data['textarea'];
        $thantai->save();
        return $thantai;
    }
}
