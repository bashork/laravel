<?php

namespace App\Http\Controllers;

//controllers are simply php classes
class  PagesController extends  Controller {
    public function getIndex(){
return view('pages/welcome');
    }
    public function getAbout(){
return view('pages/about');
    }
    public function getContact(){
return view('pages/contact');
    }
    public function postContact(){
        #structure of Controller:
    #process variable/params
    #talk to the model
    #receive data back from the model
    #compile or process data from the model if needed
    #pass data to correct view
    }

};