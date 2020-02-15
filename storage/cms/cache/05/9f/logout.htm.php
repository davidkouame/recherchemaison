<?php 
class Cms5e47e09110837554917068_ee606696a8ed8e9b9bcae37f60a8c113Class extends Cms\Classes\PageCode
{
public function onStart(){
        \Auth::logout();
        return \Redirect::to("auth/login");
    }
}
