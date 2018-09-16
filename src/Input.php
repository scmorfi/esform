<?php

namespace Scform;


class Input{
    private $input = "<input  />"; 
    private $roll = [];

    function addTag($tag,$value){
        $this->input = str_replace("<input ","<input ".$tag."="."'".$value."'", $this->input);
        return $this;
    }
    function name($value){
        $this->input = str_replace("<input ","<input name="."'".$value."'", $this->input);
        return $this;
    }
    public function setRoll($title,$roll){
        $this->roll[$title] = $roll;
        return $this;
    }
    public function reset(){
        $this->input = "<input  />";
        $this->roll = [];
    }
    public function get(){
        $a = ["design" => $this->input,"roll" => $this->roll];
        $this->reset();
        return $a;
    }

}