<?php 

class Util{

    public function convertToSlug($text){
    
    $trim = trim($text);
    $replace = str_replace(' ', '-',$trim);
    return strtolower($replace);
    }

}
?>