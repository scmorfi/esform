<?php

namespace Scform;


class Form{
    
    public function fields($array){
        $str = "";
        foreach($array as $arr){
            $str .= $arr["field"]["design"];
        }
        return $str;
    }

}