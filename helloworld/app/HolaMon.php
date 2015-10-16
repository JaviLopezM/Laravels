<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HolaMonController extends Model
{
 protected $string = "HelloWorld";

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }


}
