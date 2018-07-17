<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrDers extends Model
{
    //
    protected $table = 'orders';
    
    /*public function packages(){
        return $this->hasMany(ProDucts::class);  //กำหนดความสัมพันธ์รูปแบบ one to many ไปยัง ตาราง Product
    }
    */
}

