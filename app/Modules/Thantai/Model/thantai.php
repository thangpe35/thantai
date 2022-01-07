<?php

namespace App\Modules\Thantai\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thantai extends Model
{
    use HasFactory;
    protected $table = "thantais";
    // protected $fillable = ["name","address","telephonenumber","created_ad","branch","textarea","nameproduct","qty"];

    public static function store($data){
        echo "<script>console.log('test_2');</script>";
        $thantai = new thantai;
        $thantai->name = $data['name'];
        $thantai->address = $data['address'];
        $thantai->telephonenumber = $data['telephonenumber'];
        // $thantai->date = $data['created_at'];
        $thantai->branch = $data['branch'];        
        $thantai->message = $data['textarea'];
        // $thantai->nameproduct = $data['nameproduct'];
        $thantai->qty = $data['qty_input'];
        $thantai->save();
        return $thantai;
    }
}
