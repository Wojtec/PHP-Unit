<?php 

class Util{

    public function __construct(){

    }

    public function convertToSlug($text){
    
    $trim = trim($text);
    $replace = str_replace(' ', '-',$trim);
    return strtolower($replace);
    }

}
?>