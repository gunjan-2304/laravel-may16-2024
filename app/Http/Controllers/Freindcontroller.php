<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//class childclass extends parentclass{}
class Freindcontroller extends Controller
{
    //1. property



    //2. contructor 



    //3. method
    public function computer(){
        $data= ['name' => 'hp'];

        return view ('computer' $data);
    }
}









?>