<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Product{
    var $name;
    var $size;
 

    function __construct($name, $size)
    {
        $this->name=$name;
        $this->size=$size;
      
    }
}

class PagesControllers extends Controller
{
    public function  Home(){

     return view ('home');
}



public function  About(){

    return view ('about');
}
public function  Contact(){

    return view ('contact');
}
public function  OurTeam(){

    return view ('ourteam');
}
function Products(){
    $p1 = new Product("car","large");
    $p2 = new Product("juce","small");
    $p3 = new Product("water bottle","small");
    $productList=array($p1,$p2,$p3);
    return view('product')->with("productList",$productList);
}



}