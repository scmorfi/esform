<?php

namespace Scform;


class Post{
    private function getRoll($data){
        $a = [];
        foreach($data as $d){
            $a[key($d["field"]["roll"])] = $d["field"]["roll"][key($d["field"]["roll"])];
        }
        return $a;
    }
    public function getData($model,$data,$request){
        $request->validate($this->getRoll($data));
        $model->create($request->all());
    }

}