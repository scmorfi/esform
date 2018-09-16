<?php

 namespace  Scform\Http\Controllers;
 use App\Http\Controllers\Controller;
 class ScformController extends Controller{
    public function index(){
        return view('scform::scform-index');
    }
 }